<?php
namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'role_id' => '1',
            'api_token' => Str::random(60),
        ] );
        DB::table('users')->insert([
            'name' => 'hotel1',
            'email' => 'hotel1@gmail.com',
            'password' => Hash::make('hotel1'),
            'role_id' => '2',
            'api_token' => Str::random(60),
            ] );
            DB::table('users')->insert([
            'name' => 'hotel2',
            'email' => 'hotel2@gmail.com',
            'password' => Hash::make('hotel2'),
            'role_id' => '2',
            'api_token' => Str::random(60),
            ] );
            DB::table('users')->insert([
            'name' => 'hotel3',
            'email' => 'hotel3@gmail.com',
            'password' => Hash::make('hotel3'),
            'role_id' => '2',
            'api_token' => Str::random(60),
            ] );
            DB::table('users')->insert([
                'name' => 'hotel4',
                'email' => 'hotel4@gmail.com',
                'password' => Hash::make('hotel4'),
                'role_id' => '2',
                'api_token' => Str::random(60),
                ] );
                DB::table('users')->insert([
                    'name' => 'hotel5',
                    'email' => 'hotel5@gmail.com',
                    'password' => Hash::make('hotel5'),
                    'role_id' => '2',
                    'api_token' => Str::random(60),
                    ] );
                    DB::table('users')->insert([
                        'name' => 'hotel6',
                        'email' => 'hotel6@gmail.com',
                        'password' => Hash::make('hotel6'),
                        'role_id' => '2',
                        'api_token' => Str::random(60),
                        ] );

                        DB::table('users')->insert([
                            'name' => 'hotel7',
                            'email' => 'hotel7@gmail.com',
                            'password' => Hash::make('hotel7'),
                            'role_id' => '2',
                            'api_token' => Str::random(60),
                            ] );
                            DB::table('users')->insert([
                                'name' => 'hotel8',
                                'email' => 'hotel8@gmail.com',
                                'password' => Hash::make('hotel8'),
                                'role_id' => '2',
                                'api_token' => Str::random(60),
                                ] );
                                DB::table('users')->insert([
                                    'name' => 'hotel9',
                                    'email' => 'hotel9@gmail.com',
                                    'password' => Hash::make('hotel9'),
                                    'role_id' => '2',
                                    'api_token' => Str::random(60),
                                    ] );
            DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => Hash::make('user1'),
            'role_id' => '3',
            'api_token' => Str::random(60),
            ] );
            DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'user2@gmail.com',
            'password' => Hash::make('user2'),
            'role_id' => '3',
            'api_token' => Str::random(60),
            ] );
 }
}