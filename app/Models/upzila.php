<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class upzila extends Model
{
    use HasFactory;
    protected $table = 'upzila';
    protected $fillable = ['name','upzila_id'];
}
