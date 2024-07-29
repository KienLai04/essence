<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('categories')->insert([
            ['name' => 'Nam'],
            ['name' => 'Nữ'],
        ]);

        Product::factory(100)->create();

        DB::table('users')->insert([
            [
                'name' => 'Cao Chót Vót', 'password' => bcrypt('hehe'), 'diachi' => '', 'hinh' => '',
                'email' => 'caochotvot@gmail.com', 'dienthoai' => '0918765238', 'role' => 1
            ],
            [
                'name' => 'Mai Nhớ Em', 'password' => bcrypt('hehe'), 'diachi' => '', 'hinh' => '',
                'email' => 'mainhoem@gmail.com', 'dienthoai' => '098532482', 'role' => 0
            ],
            [
                'name' => 'Vi Na Phôn', 'password' => bcrypt('hehe'), 'diachi' => '', 'hinh' => '',
                'email' => 'vinaphone@gmail.com', 'dienthoai' => '097397392', 'role' => 1
            ]
        ]);
    }
}
