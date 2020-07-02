<?php

use Illuminate\Database\Seeder;
use App\Product;
class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<6;$i++)
        {
            $data = [
                'sale_percent' =>rand(1,40),
                'sale_product_type'=>Product::CATEGORY_CODE['Đồng hồ'],
                'sale_begin' => now(),
                'sale_end'=> now(),
                'sale_rank'=>rand(1,3),
            ];
            \App\Sale::create($data);
        }
        for($i=0;$i<6;$i++)
        {
            $data = [
                'sale_percent' =>rand(1,40),
                'sale_product_type'=>Product::CATEGORY_CODE['Máy tính bảng'],
                'sale_begin' => now(),
                'sale_end'=> now(),
                'sale_rank'=>rand(1,3),
            ];
            \App\Sale::create($data);
        }
        for($i=0;$i<6;$i++)
        {
            $data = [
                'sale_percent' =>rand(1,40),
                'sale_product_type'=>Product::CATEGORY_CODE['Laptop'],
                'sale_begin' => now(),
                'sale_end'=> now(),
                'sale_rank'=>rand(1,3),
            ];
            \App\Sale::create($data);
        }
        for($i=0;$i<6;$i++)
        {
            $data = [
                'sale_percent' =>rand(1,40),
                'sale_product_type'=>Product::CATEGORY_CODE['Phụ kiện'],
                'sale_begin' => now(),
                'sale_end'=> now(),
                'sale_rank'=>rand(1,3),
            ];
            \App\Sale::create($data);
        }
        for($i=0;$i<6;$i++)
        {
            $data = [
                'sale_percent' =>rand(1,40),
                'sale_product_type'=>Product::CATEGORY_CODE['Điện thoại'],
                'sale_begin' => now(),
                'sale_end'=> now(),
                'sale_rank'=>rand(1,3),
            ];
            \App\Sale::create($data);
        }

    }
}
