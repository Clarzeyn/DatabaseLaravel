<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sampel = [
            ['staffNo' => 'SL21', 'sName' => 'John White', 'position' => 'Manager', 'salary' => 30000, 'branchNo' => 'B005'],
            ['staffNo' => 'SG37', 'sName' => 'Ann Beech', 'position' => 'Asisstant', 'salary' => 12000, 'branchNo' => 'B003'],
            ['staffNo' => 'SG14', 'sName' => 'David Ford', 'position' => 'Suoervisor', 'salary' => 18000, 'branchNo' => 'B003'],
            ['staffNo' => 'SA9', 'sName' => 'Mary Howe', 'position' => 'Assistant', 'salary' => 9000, 'branchNo' => 'B007'],
            ['staffNo' => 'SG5', 'sName' => 'Susan Brand', 'position' => 'Manager', 'salary' => 24000, 'branchNo' => 'B003'],
            ['staffNo' => 'SL41', 'sName' => 'Julie Lee', 'position' => 'Assistant', 'salary' => 9000, 'branchNo' => 'B005'],
        ];
        DB::table('_staff')->insert($sampel);
    }
}
