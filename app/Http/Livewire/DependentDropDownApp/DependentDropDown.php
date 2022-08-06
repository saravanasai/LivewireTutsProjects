<?php

namespace App\Http\Livewire\DependentDropDownApp;

use App\Models\DependentDropDownApp\DropDownCategory;
use Livewire\Component;

class DependentDropDown extends Component
{

    public array $sections = [1 => "kids", 2 => "Mens", 3 => "Womens"];

    public $sectionSelected;

    public $categorys=[];


    public function onChangeSection()
    {
        $this->categorys = DropDownCategory::where('section_id',$this->sectionSelected)->get();
    }

    public function render()
    {
        return view('livewire.dependent-drop-down-app.dependent-drop-down');
    }
}
