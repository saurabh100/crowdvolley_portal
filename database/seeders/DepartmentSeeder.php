<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('departments')->truncate();
        DB::table('departments')->insert([
            [
                'department_name' => 'HR',
                'department_id' => 1,
            ],
            [
                'department_name' => 'Developer',
                'department_id' => 2,
            ],
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
