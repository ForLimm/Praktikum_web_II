<?php
#Muhammad Haliim
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("students")->insert([
            [
                'name' => 'Muhammad Haliim',
                'student_id_number' => 'F55123012',
                'email' => 'halim@gmail.com',
                'phone_number' => '085234567891',
                'birth_date' => '2005-02-08',
                'gender' => 'Male',
                'status' => 'Active',
                'major_id' => 1,
            ],
            [
                'name' => 'akmal',
                'student_id_number' => 'F55123001',
                'email' => 'akmalaja@gmail.com',
                'phone_number' => '085280284736',
                'birth_date' => '2004-07-14',
                'gender' => 'Female',
                'status' => 'Active',
                'major_id' => 2,
            ]
        ]);
    }
}