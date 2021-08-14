<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorsJason extends Model
{
    use HasFactory;

    protected $connection = "mysqljason";

    protected $fillable = ["name"];
}
