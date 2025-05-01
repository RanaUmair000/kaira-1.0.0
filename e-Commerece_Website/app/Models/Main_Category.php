<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Main_Category extends Model
{

    public $timestamps = false;
    protected $table = 'main_categories';
    protected $guarded = [];
    use HasFactory;

    

}
