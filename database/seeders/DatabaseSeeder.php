<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' => 'ludo123'
        // ]);
        $user = User::first();

        Setting::create([
            'website_name' => 'Giftos',
            'slogan' => 'Sample slogan',
            'logo' => 'logo.png',
            'favicon' => 'favicon.png',
            'phone_no' => 9844277685,
            'mobile_no' => 9869696969,
            'email' => 'info@giftos.com',
            'address' => 'Kathmandu',
            'opening_hours' => '9-5',
            'status' => 1,
            'created_by' => $user->id
        ]);
    }
}
