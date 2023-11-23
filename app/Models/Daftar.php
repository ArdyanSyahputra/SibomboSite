<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    protected $fillable = ['nama','username','email','password','level','status'];
    use HasFactory;
}
