<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorsBwaj extends Model
{
    use HasFactory;

    protected $connection = "mysqlbwaj";

    protected $fillable = ["name"];
}
