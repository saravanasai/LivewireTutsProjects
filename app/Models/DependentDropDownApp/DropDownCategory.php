<?php

namespace App\Models\DependentDropDownApp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DropDownCategory extends Model
{
    use HasFactory;

    protected $table = "drop_down_categories";


    protected $fillable = [
        'catogory_type',
        'section_id'
    ];

}
