<?php

namespace App\Models\EmployeeApp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = "employees";


    protected $fillable = [
        'name',
        'phone',
        'address',
    ];
}
