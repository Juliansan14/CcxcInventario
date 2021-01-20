<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    protected $table="user";
    protected $fillable=[
        "last_name",
        "name",
        "birthdate",
        "email",
        "role",	
        "password",
        "type_id",
        "phone",
        "number_id",
        "remember_token"
    ];
}
