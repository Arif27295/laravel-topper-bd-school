<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class post_code extends Model
{
    use HasFactory;
    protected $table = 'post_code';
    protected $fillable = ['p_code','p_cod_id'];
}
