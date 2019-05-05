<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'notes';
    protected $primaryKey = 'id';
    protected $fillable =['title','content'];
    protected $dates = ['created_at', 'updated_at','deleted_at'];

}
