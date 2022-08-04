<?php

namespace App\Http\Livewire\CalculatorApp;

use Livewire\Component;

class Calculator extends Component
{


    public string $number1 = "";
    public string $number2 = "";
    public string $action = "+";
    public bool $disabled = true;
    public float $result = 0.0;

    public string $perviousCalc = "";


    public function calculate()
    {
        $this->result = (float)$this->number1 + (float)$this->number2;
        $this->perviousCalc = $this->number1 . "+" . $this->number2;
        $this->number1 = "";
        $this->number2 = "";
        $this->disabled = true;
    }


    public function updated($property)
    {

        if ($this->number1 === "" || $this->number2 === "") {

            $this->disabled = true;
        } else {

            $this->disabled = false;
        }
    }

    public function render()
    {
        return view('livewire.calculator-app.calculator');
    }
}
