<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;
     protected $fillable=(
        [ 'name', 'email', 'phone', 'address', 'skill', 'gender', 'ward_no', 'message', 'status']);
}
