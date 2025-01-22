<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class post_office extends Model
{
    use HasFactory;
    protected $table = 'post_office';
    protected $fillable = ['p_name','p_office_id'];
}
