<?php

namespace Database\Seeders;

use App\Models\EmployeeApp\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::factory(20)->create();
    }
}
