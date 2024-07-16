<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 10, 2); // Giá sản phẩm (ví dụ: 10 chữ số, 2 số thập phân)
            $table->string('image')->nullable(); // Đường dẫn hình ảnh (cho phép null)
            $table->text('description')->nullable(); // Mô tả sản phẩm (cho phép null)
            $table->string('shopee_link'); // Đường link Shopee
            $table->timestamps(); // Tự động tạo các cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
