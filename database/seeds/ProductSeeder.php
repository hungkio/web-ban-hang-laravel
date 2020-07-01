<?php

use Illuminate\Database\Seeder;
use App\Http;
class ProductSeeder extends Seeder
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
               'product_name' =>$product_name[$i],
               'product_counts'=>rand(1,20),
               'products_type'=>'APPLE',
               'product_in_prices' => rand(100,1000),
               'product_out_prices'=> rand(200,2000),
           ];
           \App\Product::create($data);
       }
        for($i=0;$i<6;$i++)
        {
            $data = [
                'product_name' =>$product_name2[$i],
                'product_counts'=>rand(1,20),
                'products_type'=>'ASUS',
                'product_in_prices' => rand(100,1000),
                'product_out_prices'=> rand(200,2000),
            ];
            \App\Product::create($data);
        }
        for($i=0;$i<6;$i++)
        {
            $data = [
                'product_name' =>$product_name3[$i],
                'product_counts'=>rand(1,20),
                'products_type'=>'LENOVO',
                'product_in_prices' => rand(100,1000),
                'product_out_prices'=> rand(200,2000),
            ];
            \App\Product::create($data);
        }
        for($i=0;$i<6;$i++)
        {
            $data = [
                'product_name' =>$product_name4[$i],
                'product_counts'=>rand(1,20),
                'products_type'=>'DELL',
                'product_in_prices' => rand(100,1000),
                'product_out_prices'=> rand(200,2000),
            ];
            \App\Product::create($data);
        }
        for($i=0;$i<6;$i++)
        {
            $data = [
                'product_name' =>$product_name5[$i],
                'product_counts'=>rand(1,20),
                'products_type'=>'HP',
                'product_in_prices' => rand(100,1000),
                'product_out_prices'=> rand(200,2000),
            ];
            \App\Product::create($data);
        }

    }
}
