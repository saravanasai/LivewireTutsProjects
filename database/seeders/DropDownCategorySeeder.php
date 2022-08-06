<?php

namespace Database\Seeders;

use App\Models\DependentDropDownApp\DropDownCategory;
use Illuminate\Database\Seeder;

class DropDownCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DropDownCategory::factory(20)->create();
    }
}
