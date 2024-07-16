<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // Import model Product

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'iPhone 15 Pro Max',
                'price' => 29990000,
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Điện thoại thông minh cao cấp nhất của Apple.',
                'shopee_link' => 'https://shopee.vn/iphone-15-pro-max',
            ],
            [
                'name' => 'Samsung Galaxy S23 Ultra',
                'price' => 24990000,
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Điện thoại Android mạnh mẽ với camera ấn tượng.',
                'shopee_link' => 'https://shopee.vn/samsung-galaxy-s23-ultra',
            ],
            [
                'name' => 'MacBook Air M2',
                'price' => 28990000,
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Laptop mỏng nhẹ với hiệu năng vượt trội.',
                'shopee_link' => 'https://shopee.vn/macbook-air-m2',
            ],
            [
                'name' => 'iPad Pro 12.9 inch',
                'price' => 25990000,
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Máy tính bảng mạnh mẽ cho công việc và giải trí.',
                'shopee_link' => 'https://shopee.vn/ipad-pro-12.9-inch',
            ],
            [
                'name' => 'AirPods Pro',
                'price' => 5490000,
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Tai nghe không dây chống ồn chủ động.',
                'shopee_link' => 'https://shopee.vn/airpods-pro',
            ],
            [
                'name' => 'Xiaomi Redmi Note 12',
                'price' => 4990000,
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Điện thoại giá rẻ với cấu hình tốt.',
                'shopee_link' => 'https://shopee.vn/xiaomi-redmi-note-12',
            ],
            [
                'name' => 'Oppo Reno8 T 5G',
                'price' => 8990000,
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Điện thoại tầm trung với thiết kế đẹp.',
                'shopee_link' => 'https://shopee.vn/oppo-reno8-t-5g',
            ],
            [
                'name' => 'Apple Watch Series 8',
                'price' => 10990000,
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Đồng hồ thông minh theo dõi sức khỏe.',
                'shopee_link' => 'https://shopee.vn/apple-watch-series-8',
            ],
            [
                'name' => 'Tai nghe Sony WH-1000XM5',
                'price' => 8490000,
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Tai nghe không dây chống ồn cao cấp.',
                'shopee_link' => 'https://shopee.vn/tai-nghe-sony-wh-1000xm5',
            ],
            [
                'name' => 'Máy ảnh Fujifilm X-T5',
                'price' => 42990000,
                'image' => 'https://via.placeholder.com/150',
                'description' => 'Máy ảnh mirrorless chuyên nghiệp.',
                'shopee_link' => 'https://shopee.vn/may-anh-fujifilm-x-t5',
            ],
        ];
        

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
