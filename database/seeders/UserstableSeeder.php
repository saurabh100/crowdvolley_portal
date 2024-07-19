<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imagePath = '';

        User::create([
            'name' => 'Saurabh Upadhyay',
            'role' => 'Admin',
            'email' => 'saurabh@crowdvolley.com',
            'password' => bcrypt('sau5560'),
            'image' => $imagePath,
        ]);
    }
}
