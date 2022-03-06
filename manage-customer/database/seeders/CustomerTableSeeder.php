<?php

namespace Database\Seeders;

use Dotenv\Util\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [];
        for($i =0 ; $i < 20 ; $i++){
            array_push($array,[
                'name' => Str::random(10),
                'dob' => date("Y-m-d", mt_rand(1 , time())),
                'email'=> Str::random(10) . '@gmail.com',
                'create_at'=> date('Y-m-d H:i:s'),
                'update_at'=> date('Y-m-d H:i:s')
            ]);
        }
        DB::table('customer')->insert($array);
    }
}
