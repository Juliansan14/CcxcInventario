<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_address extends Model
{
    use HasFactory;
    protected $table="user_address";
    protected $fillable=[
        "city",
        "location",
        "type_housing",
        "direction",
        "aditional"
    ];
}
