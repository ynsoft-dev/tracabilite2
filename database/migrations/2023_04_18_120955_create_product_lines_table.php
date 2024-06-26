<?php

use App\Models\Line;
use App\Models\product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_lines', function (Blueprint $table) {
            $table->primary(['product_id', 'line_id']);
            $table->foreignIdFor(product::class);
            $table->foreignIdFor(Line::class);
            $table->integer('cadence');
            $table->enum('uniteprod',['Plt','Tonne','Unit']);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_lines');
    }
};
