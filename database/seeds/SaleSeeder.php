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
        $product_name = ['Iphone6','Ipad Air 2','Iphone XS max','Airpods Pro','Macbook Pro 2020','Iphone 8'];
        $product_name2 = ['Asus VivoBook X409FA','Asus VivoBook A512FA','Asus ZenBook Edition 30 ',
            'Asus Gaming ROG Strix G531 ',
            'Asus ZenBook 13 ','Asus VivoBook S430FN ',
            'Asus VivoBook S530FN '];
        $product_name3 = ['IdeaPad Slim 3 ','  Flex 2 Pro 15 (Broadwell)','Flex 2 Pro 15 (Haswell)'
            ,'Yoga 3 11 ','Z41-70/Z51-70','S41-70/U41-70','G50-80 Touch'];
        $product_name4 = ['Dell Insprion 3212','Dell Vostro 5400','Dell Latitude 2312','Dell XPS 2221',
            'Dell Precision 32','Dell XPS 15','Dell Precision 7000'];
        $product_name5 = ['HP Pavilion tx2000','HP G 4321','HP Envy 14','HP Essentials 1234','HP ProBook 15','HP Elitebook 16','HP Mini 210'];
        for($i=0;$i<6;$i++)
        {
            $data = [
                'sale_product_name' =>$product_name[$i],
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
                'sale_product_name' =>$product_name2[$i],
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
                'sale_product_name' =>$product_name3[$i],
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
                'sale_product_name' =>$product_name4[$i],
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
                'sale_product_name' =>$product_name5[$i],
                'sale_product_type'=>'HP',
                'sale_begin' => now(),
                'sale_end'=> now(),
                'sale_rank'=>rand(1,3),
            ];
            \App\Sale::create($data);
        }

    }
}
