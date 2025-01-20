<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class district extends Model
{
    use HasFactory;
    protected $table = 'district';
    protected $fillable = ['nd_name'];
}
