<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coursecat extends Model
{
    use HasFactory;
       protected $fillable=(
        [ 'c_name', 'c_status',]
    );
}
