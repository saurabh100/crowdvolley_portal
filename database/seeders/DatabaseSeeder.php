<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(UserstableSeeder::class);
        $this->call(UserDesignation::class);
        $this->call(SalaryStructureSeeder::class);
        $this->call(DepartmentSeeder::class);
    }
}
