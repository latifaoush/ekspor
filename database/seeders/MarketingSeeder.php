<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class MarketingSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Marketing',
            'email' => 'marketing@gmail.com',
            'password' => Hash::make('marketing123'), // ganti dengan password yang Anda inginkan
            'role' => 'Marketing',
        ]);
    }
}
