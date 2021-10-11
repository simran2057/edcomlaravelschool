<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $tables='files';
       protected $fillable=(
        ['details' , 'file_link' , 'extension' , 'status', 'title']
    );
}
