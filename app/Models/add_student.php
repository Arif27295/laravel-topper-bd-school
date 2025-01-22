<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class add_student extends Model
{
    use HasFactory;
    protected $table = ' add_students';
    protected $fillable = ['name','father_n','father_nid','mother_n','mother_nid','class','roll','Number','pass','email','gender','reg_date','birth_date','blo_grp','img','stu_id','pre_care','pre_vill','pre_dist','pre_upzi','pre_p_offi','pre_p_cod','per_care','per_vill','per_dist','per_upzi','per_p_offi','per_p_cod'];
    
    																											
}
