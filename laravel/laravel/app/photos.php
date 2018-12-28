<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photos extends Model
{
    protected $fillable = ['title','description','photo'];
}
