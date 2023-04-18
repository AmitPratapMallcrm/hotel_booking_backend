<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'roomtype' => '1',
            'price' => '120',
            'facilities' =>'They include coms, sounders and more. Amenities often include personal items like the toiletries the hotel provides.',
            'image' => 'room1.png',
            'avail' => '1',
            'numberofroom'=>'4',
            'hotel_id'=>'1'
            ] );
            DB::table('rooms')->insert([
                'roomtype' => '2',
                'price' => '180',
                'facilities' =>' mini-bars, free Wi-F They can also include things that make a room more comfortable, such as air-conditioning.',
                'image' => 'room2.png',
                'avail' => '1',
                'numberofroom'=>'6',
                'hotel_id'=>'1'
                ] );
            DB::table('rooms')->insert([
                    'roomtype' => '3',
                    'price' => '250',
                    'facilities' =>', refrigerators, mini-bars, free Wi-Fso include things that make a room more comfortable, such as air-conditioning.',
                    'image' => 'room3.png',
                    'avail' => '1',
                    'numberofroom'=>'7',
                    'hotel_id'=>'1'
                    ] );
                    DB::table('rooms')->insert([
                        'roomtype' => '1',
                        'price' => '180',
                        'facilities' =>' mini-bars, free Wi-Fi, coffeenclude things that make a room more comfortable, such as air-conditioning.',
                        'image' => 'room12.png',
                        'avail' => '1',
                        'numberofroom'=>'6',
                        'hotel_id'=>'2'
                        ] );
                        DB::table('rooms')->insert([
                            'roomtype' => '2',
                            'price' => '280',
                            'facilities' =>' Wi-Fi, coffee-makers, hairdryeries the hotel provides. They can also comfortable, such as air-conditioning.',
                            'image' => 'room22.png',
                            'avail' => '1',
                            'numberofroom'=>'6',
                            'hotel_id'=>'2'
                            ] );
                        DB::table('rooms')->insert([
                                'roomtype' => '3',
                                'price' => '350',
                                'facilities' =>' free Wi-Fi, coffee-makers,ke the toiletriude things that make a room more comfortable, such as air-conditioning.',
                                'image' => 'room32.png',
                                'avail' => '1',
                                'numberofroom'=>'17',
                                'hotel_id'=>'2'
                                ] );
                                DB::table('rooms')->insert([
                                    'roomtype' => '1',
                                    'price' => '129',
                                    'facilities' =>'mini-bars, free Wmore. Amenities often include personal items like the toiletries the hotel provides. They can also include things that make a room more comfortable, such as air-conditioning.',
                                    'image' => 'room1.png',
                                    'avail' => '1',
                                    'numberofroom'=>'8',
                                    'hotel_id'=>'3'
                                    ] );
                                    DB::table('rooms')->insert([
                                        'roomtype' => '2',
                                        'price' => '285',
                                        'facilities' =>'bars, free Wi-Fi, coffities often include personal items like the toiletries the hotel provides. They can also include things that make a room more comfortable, such as air-conditioning.',
                                        'image' => 'room2.png',
                                        'avail' => '1',
                                        'numberofroom'=>'6',
                                        'hotel_id'=>'3'
                                        ] );
                                    DB::table('rooms')->insert([
                                            'roomtype' => '3',
                                            'price' => '350',
                                            'facilities' =>'ators, mini-bars and more. Amenities often include personal items like the toiletries the hotel provides. They can also include things that make a room more comfortable, such as air-conditioning.',
                                            'image' => 'room3.png',
                                            'avail' => '1',
                                            'numberofroom'=>'7',
                                            'hotel_id'=>'3'
                                            ] );
          
    }
}
