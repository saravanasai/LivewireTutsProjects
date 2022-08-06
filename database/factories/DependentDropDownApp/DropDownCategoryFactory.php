<?php

namespace Database\Factories\DependentDropDownApp;

use App\Models\DependentDropDownApp\DropDownCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class DropDownCategoryFactory extends Factory
{


    protected $model=DropDownCategory::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        "catogory_type"=>$this->faker->userName(),
        "section_id"=>rand(1,3)
        ];
    }
}
