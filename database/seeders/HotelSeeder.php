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
            'hotelimage'=> 'https://www.shutterstock.com/image-illustration/hotel-sign-stars-3d-illustration-260nw-195879770.jpg'  ,
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
                'hotelimage'=> 'https://media.istockphoto.com/id/119926339/photo/resort-swimming-pool.jpg?s=612x612&w=0&k=20&c=9QtwJC2boq3GFHaeDsKytF4-CavYKQuy1jBD2IRfYKc='  ,
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
                    'hotelimage'=> 'https://thumbs.dreamstime.com/b/modern-commercial-building-lobby-office-corridor-hotel-passageway-139067767.jpg'  ,
                    'wifi'=> '1'  ,
                    'availability'=> '1'  ,
                    'user_id'=> '4'  ,
                    ] );
    }
}