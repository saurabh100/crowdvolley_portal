<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SalaryStructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('salary_structures')->truncate();
        DB::table('salary_structures')->insert([
            [
                'salary_class' => 'A',
                'basic_salary' => 30000,
                'mobile_allowance' => 1000,
                'medical_expenses' => 5000,
                'houseRent_allowance' => 14000,
                'total_salary' => 50000,
            ],
            [
                'salary_class' => 'B',
                'basic_salary' => 20000,
                'mobile_allowance' => 1000,
                'medical_expenses' => 5000,
                'houseRent_allowance' => 14000,
                'total_salary' => 40000,
            ],
            [
                'salary_class' => 'C',
                'basic_salary' => 20000,
                'mobile_allowance' => 1000,
                'medical_expenses' => 2000,
                'houseRent_allowance' => 7000,
                'total_salary' => 30000,
            ],
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
