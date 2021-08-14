<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorsGana extends Model
{
    use HasFactory;

    protected $connection = "mysqlgana";

    protected $fillable = ["name"];
}
