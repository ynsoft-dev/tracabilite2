<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\UpdateOrderRequest;

class OrderController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:order-list|order-create|order-edit|order-delete', ['only' => ['index','show']]);
         $this->middleware('permission:order-create', ['only' => ['create','store']]);
         $this->middleware('permission:order-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:order-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::latest()->paginate(5);
        return view('orders.index',compact('orders'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'numBC' => 'required',
            'depotdest' => 'required',
            'dateorder' => 'required',
        ]);

        $order = Order::create($request->all());

        foreach ($request->orderProducts as $product) {
            $order->products()->attach($product['product_id'],
                ['quantity' => $product['quantity']]);
        }


        return redirect()->route('orders.index')
        ->with('success','Order created successfully.');

    }


    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $orderProducts = $order->products;
        return view('orders.show',['order' => $order],compact('order','orderProducts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        // $orderProducts = $order->orderProducts;
        // $allProducts = Product::all();
        return view('orders.edit', compact('order'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {


        $order = Order::find($id);
       $order->numBC = $request->input('numBC');
       $order->depotdest = $request->input('depotdest');
       $order->dateorder = $request->input('dateorder');

        $order->save();

       return redirect()->route('orders.index')
                        ->with('success','Order updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('orders.index')
                        ->with('success','Order deleted successfully');
    }
}
