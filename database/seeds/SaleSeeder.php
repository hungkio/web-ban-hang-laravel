<?php

use Illuminate\Database\Seeder;

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
                'sale_product_type'=>'APPLE',
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
                'sale_product_type'=>'ASUS',
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
                'sale_product_type'=>'LENOVO',
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
                'sale_product_type'=>'DELL',
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
                'sale_product_type'=>'HP',
                'sale_begin' => now(),
                'sale_end'=> now(),
                'sale_rank'=>rand(1,3),
            ];
            \App\Sale::create($data);
        }

    }
}
