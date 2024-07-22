<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UserDesignation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('designations')->truncate();
        DB::table('designations')->insert([
            [
                'designation_name' => 'Junior developer',
                'designation_id' => 1,
                'salary_structure_id' => 1,
                'department_id' => 1,
            ],
            [
                'designation_name' => 'Senior developer',
                'designation_id' => 2,
                'salary_structure_id' => 2,
                'department_id' => 2,
            ],
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
