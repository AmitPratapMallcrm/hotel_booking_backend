<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->insert([
            'district' => 'Gorakhpur',
            'address' => 'kunraghat',
            'location' => '273010',
            'phonenumber' => '6784904403',
            'numberofavailroom'=>'21',
            'hotelimage'=> 'hotel1.img'  ,
            'wifi'=> '1'  ,
            'availability'=> '1'  ,
            'user_id'=> '2'  ,

            ] );
            DB::table('hotels')->insert([
                'district' => 'Lucknow',
                'address' => 'gomti nagar',
                'location' => '210301',
                'phonenumber' => '8920204403',
                'numberofavailroom'=>'18',
                'hotelimage'=> 'hotel2.img'  ,
                'wifi'=> '1'  ,
                'availability'=> '1'  ,
                'user_id'=> '3'  ,
    
                ] );
                DB::table('hotels')->insert([
                    'district' => 'kanpur',
                    'address' => 'swaroop nagar',
                    'location' => '208001',
                    'phonenumber' => '9827604403',
                    'numberofavailroom'=>'18',
                    'hotelimage'=> 'hotel1.img'  ,
                    'wifi'=> '1'  ,
                    'availability'=> '1'  ,
                    'user_id'=> '4'  ,
        
                    ] );
    }
}
