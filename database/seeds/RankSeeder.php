<?php

use Illuminate\Database\Seeder;
use \App\Guest;
class RankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'rank_name' => Guest::RANK_CODE['silver'],
            'bill_count'=>'25',
            'total_bills'=>'5000',
        ];
        $data1 = [
            'rank_name' => Guest::RANK_CODE['gold'],
            'bill_count'=>'35',
            'total_bills'=>'10000',
        ];
        $data2 = [
            'rank_name' => Guest::RANK_CODE['diamond'],
            'bill_count'=>'50',
            'total_bills'=>'25000',
        ];
        \App\Rank::create($data);
        \App\Rank::create($data1);
        \App\Rank::create($data2);
    }
}
