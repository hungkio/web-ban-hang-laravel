<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
          'username' => 'admin',
          'password' => User::DEFAULT_PASSWORD,
          'name' => 'A Đê Min',
          'age' => 23,
          'sex' => 1,
          'email' => 'hungkio16.9.98@gmail.com',
          'phonenumber' => '0345281681',
          'address' => 'Hà Nội',
        ];
        User::create($data);
    }
}
