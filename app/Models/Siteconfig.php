<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siteconfig extends Model
{
    use HasFactory;
     protected $table = "siteconfigs";
      protected $fillable=(
        [ 'site_key', 'site_value', 'site_name', 'status','imglink']
    );
}
