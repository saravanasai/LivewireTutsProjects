<?php

namespace App\Http\Livewire\EmployeeApp;

use App\Models\EmployeeApp\Employee as EmployeeAppEmployee;
use Livewire\Component;
use Livewire\WithPagination;

class Employee extends Component
{

    use WithPagination;


    public $search = '';

    public  $employeeName;
    public  $employeePhone;

    public $editableId = 0;

    protected $queryString = ['search'];

    protected $paginationTheme = 'bootstrap';

    public function toggleContentEditable($id)
    {
        $this->editableId = $id;
    }

    public function updated($property)
    {
        if('search'===$property)
        {
            $this->resetPage();
        }

        $this->resetPage();

    }


    public function render()
    {

        $query =  EmployeeAppEmployee::query();

        if ($this->search) {

            $query->where("name", "like", "%{$this->search}%")
                ->orWhere('phone', 'like', "%{$this->search}%");
        }


        return view('livewire.employee-app.employee', ['employees' => $query->paginate(10)]);
    }
}
