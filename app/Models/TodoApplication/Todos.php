<?php

namespace App\Models\TodoApplication;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todos extends Model
{
    use HasFactory;


    protected $table = "todos";


    protected $fillable = [
        'todo_text',
        'is_completed'
    ];
}
