<?php

namespace Database\Seeders;

use App\Models\DependentDropDownApp\DropDownCategory;
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
        // \App\Models\User::factory(10)->create();

        $this->call(DropDownCategorySeeder::class);
        $this->call(EmployeeSeeder::class);
    }
}
