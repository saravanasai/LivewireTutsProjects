<?php

namespace App\Http\Livewire\EmployeeApp;

use App\Models\EmployeeApp\Employee as EmployeeAppEmployee;
use Livewire\Component;
use Livewire\WithPagination;

class Employee extends Component
{



    public  $employees=[] ;
    public  $employeeName ;
    public  $employeePhone;

    public $editableId=0;





    public function mount()
    {
        $this->employees= $this->loadEmployees();
    }


    public function loadEmployees()
    {
        return EmployeeAppEmployee::all();
    }

    public function toggleContentEditable($id)
    {
        $this->editableId=$id;
    }

    public function save()

    {

        $this->validate();

        foreach ($this->employees as $employee) {

            $employee->save();

        }

    }

    public function render()
    {
        return view('livewire.employee-app.employee');
    }
}
