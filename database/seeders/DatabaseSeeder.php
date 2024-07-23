<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('room_types')->insert([
            ['name' => 'Standard Room', 'description' => '1 Standard Bed', 'price' => 100.00],
            ['name' => 'Deluxe Room', 'description' => '1 King Bed', 'price' => 200.00],
            ['name' => 'Suite Room', 'description' => '1 King Bed and 1 Queen Bed', 'price' => 300.00],
        ]);

        DB::table('rooms')->insert([
            ['room_type_id' => 1, 'room_number' => '101', 'status' => 0],
            ['room_type_id' => 1, 'room_number' => '102', 'status' => 0],
            ['room_type_id' => 1, 'room_number' => '103', 'status' => 0],
            ['room_type_id' => 2, 'room_number' => '201', 'status' => 0],
            ['room_type_id' => 2, 'room_number' => '202', 'status' => 0],
            ['room_type_id' => 2, 'room_number' => '203', 'status' => 0],
            ['room_type_id' => 3, 'room_number' => '301', 'status' => 0],
            ['room_type_id' => 3, 'room_number' => '302', 'status' => 0],
            ['room_type_id' => 3, 'room_number' => '303', 'status' => 0],
        ]);

        DB::table('rooms')->insert([
            ['room_type_id' => 1, 'room_number' => '101', 'status' => 0],
            ['room_type_id' => 1, 'room_number' => '102', 'status' => 0],
            ['room_type_id' => 1, 'room_number' => '103', 'status' => 0],
            ['room_type_id' => 2, 'room_number' => '201', 'status' => 0],
            ['room_type_id' => 2, 'room_number' => '202', 'status' => 0],
            ['room_type_id' => 2, 'room_number' => '203', 'status' => 0],
            ['room_type_id' => 3, 'room_number' => '301', 'status' => 0],
            ['room_type_id' => 3, 'room_number' => '302', 'status' => 0],
            ['room_type_id' => 3, 'room_number' => '303', 'status' => 0],
        ]);
    }
}
