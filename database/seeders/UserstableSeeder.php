<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'name' => 'Saurabh Upadhyay',
            'role' => 'Admin',
            'email' => 'saurabh@crowdvolley.com',
            'password' => bcrypt('sau5560'),
            'image' => '',
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
