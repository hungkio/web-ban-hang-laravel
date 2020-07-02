<?php

use Illuminate\Database\Seeder;
use App\Http;
use App\Product;
class   ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_name = [
            'Apple watch s3 gps 42mm viền nhôm dây cao su đen',
            'Apple watch s3 lte 38mm viền nhôm dây cao su',
            'Apple watch s3 lte 42mm viền nhôm dây cao su',
            'Apple watch s5 40mm viền nhôm dây cao su',
            'Apple watch s5 lte 44mm viền nhôm dây cao su đen',
            'Apple watch s5 lte dây thép'];
        $product_image = ['storage/images/apple-watch-s3-gps-42mm-vien-nhom-day-cao-su-den-163720-023733-600x600.png',
            'storage/images/apple-watch-s3-lte-38mm-vien-nhom-day-cao-su-thum-600x600.jpg',
            'storage/images/apple-watch-s3-lte-42mm-vien-nhom-day-cao-su-thum-600x600.jpg',
            'storage/images/apple-watch-s5-40mm-vien-nhom-day-cao-su10-2-1-600x600.jpg',
            'storage/images/apple-watch-s5-lte-44mm-vien-nhom-day-cao-su-den-ava-600x600.jpg',
            'storage/images/apple-watch-s5-lte-day-thep-thum-600x600.jpg'];
        $product_name2 = [
            'Acer Aspire a515 53 5112 i5 8265u 14gb 16gb 1tb',
            'Acer Swift sf315 52 38yq i3 8130u 4gb 1tb',
            'Apple Macbook Air 2020 gold',
            'Hp 15s du0063tu i5 8265u 4gb 1tb win10 6zf63pa 20405',
            'Lenovo s340 81n70064vn',
            'Lenovo Ideapad 3 14iil05 i7 81wd0040vn',
        ];
        $product_image2 = [
            'storage/images/LAPTOP_acer-aspire-a515-53-5112-i5-8265u-4gb-16gb-1tb-win-198790-600x600.png',
            'storage/images/LAPTOP_acer-swift-sf315-52-38yq-i3-8130u-4gb-1tb-156f-win-600x600.png',
            'storage/images/LAPTOP_apple-macbook-air-2020-gold-1-600x600.png',
            'storage/images/LAPTOP_hp-15s-du0063tu-i5-8265u-4gb-1tb-win10-6zf63pa-204053-600x600.png',
            'storage/images/LAPTOP_laptop-lenovo-s340-81n70064vn-202561-202561-202561-600x600.png',
            'storage/images/LAPTOP_lenovo-ideapad-3-14iil05-i7-81wd0040vn-222638-1-600x600.png'
        ];
        $product_name3 = [
            'Loa bluetooth fenda w5',
            'Loa bluetooth fenda w8',
            'Miếng dán kính full màn hình XSMax - 11 Promax',
            'Tai nghe chụp tai kanen ip 2090',
            'Tai nghe bluetooth awei g51bs đen',
            'Sạc dự phòng 19000mah xmobile gram 6s trắng',
        ];
        $product_image3= [
            'storage/images/loa-bluetooth-fenda-w5-avatar-5-600x600.jpg',
            'storage/images/loa-bluetooth-fenda-w8-avatar-1-600x600.jpg',
            'storage/images/mieng-dan-kinh-full-man-hinh-xs-max-11-pro-max-gsp-600x600.jpg',
            'storage/images/tai-nghe-chup-tai-kanen-ip-2090-2-3-600x600.jpg',
            'storage/images/tai-nghe-bluetooth-awei-g51bs-den-avatar-600x600.jpg',
            'storage/images/sac-dtdd-pin-sac-du-phong-19000mah-xmobile-gram-6s-trang-600x600.jpg'
        ];
        $product_name4 = [
            'Iphone 11 Red',
            'Oppo a92 White',
            'Realme 6i White',
            'Samsung Galaxy a31',
            'Samsung Galaxy a51 8gb blue',
            'Xiaomi Redmi 9',
        ];
        $product_image4 = [
            'storage/images/PHONE_iphone-11-red-2-400x460-400x460.png',
            'storage/images/PHONE_oppo-a92-white-400-400x460.png',
            'storage/images/PHONE_realme-6i-trang-400x460-fix-400x460.png',
            'storage/images/PHONE_samsung-galaxy-a31-400x460-white-400x460.png',
            'storage/images/PHONE_samsung-galaxy-a51-8gb-blue-400x460-1-400x460.png',
            'storage/images/PHONE_xiaomi-redmi-9-114620-094649-400x460.png'
        ];
        $product_name5 = [
            'Huawei Mediapad t5 16gb',
            'Huawei Mediapad t5 33397',
            'IPad 10.2 Inch Wifi 32gb 2019 gold',
            'IPad 10.2 Inch Wifi 128gb 2019 silver',
            'Samsung Galaxy Tab a8 plus black',
            'Samsung Galaxy Tab a8 2019 silver',
        ];
        $product_image5 = [
            'storage/images/TABLET_huawei-mediapad-t5-16gb-400x460-2-400x460.png',
            'storage/images/TABLET_huawei-mediapad-t5-33397-hinhchitiet-400x460.png',
            'storage/images/TABLET_ipad-10-2-inch-wifi-32gb-2019-gold-400x460.png',
            'storage/images/TABLET_ipipad-10-2-inch-wifi-128gb-2019-silver-400x460.png',
            'storage/images/TABLET_samsung-galaxy-tab-a8-plus-p205-black-400x460.png',
            'storage/images/TABLET_samsung-galaxy-tab-a8-t295-2019-silver-400x460.png'
        ];
       for($i=0;$i<6;$i++)
       {
           $data = [
               'product_name' =>$product_name[$i],
               'product_counts'=>rand(1,20),
              'products_type'=> Product::CATEGORY_CODE['Đồng hồ'],
               'product_in_prices' => rand(100,1000),
               'product_out_prices'=> rand(200,2000),
               'image'=>$product_image[$i],
           ];
           \App\Product::create($data);
       }
        for($i=0;$i<6;$i++)
        {
            $data = [
                'product_name' =>$product_name2[$i],
                'product_counts'=>rand(1,20),
                'products_type'=> Product::CATEGORY_CODE['Laptop'],
                'product_in_prices' => rand(100,1000),
                'product_out_prices'=> rand(200,2000),
                'image'=>$product_image2[$i],
            ];
            \App\Product::create($data);
        }
        for($i=0;$i<6;$i++)
        {
            $data = [
                'product_name' =>$product_name3[$i],
                'product_counts'=>rand(1,20),
                'products_type'=> Product::CATEGORY_CODE['Phụ kiện'],
                'product_in_prices' => rand(100,1000),
                'product_out_prices'=> rand(200,2000),
                'image'=>$product_image3[$i],
            ];
            \App\Product::create($data);
        }
        for($i=0;$i<6;$i++)
        {
            $data = [
                'product_name' =>$product_name4[$i],
                'product_counts'=>rand(1,20),
                'products_type'=> Product::CATEGORY_CODE['Điện thoại'],
                'product_in_prices' => rand(100,1000),
                'product_out_prices'=> rand(200,2000),
                'image'=>$product_image4[$i],
            ];
            \App\Product::create($data);
        }
        for($i=0;$i<6;$i++)
        {
            $data = [
                'product_name' =>$product_name5[$i],
                'product_counts'=>rand(1,20),
                'products_type'=> Product::CATEGORY_CODE['Máy tính bảng'],
                'product_in_prices' => rand(100,1000),
                'product_out_prices'=> rand(200,2000),
                'image'=>$product_image5[$i],
            ];
            \App\Product::create($data);
        }

    }
}
