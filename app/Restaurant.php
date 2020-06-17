<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = 'Restaurant';
    public $timestamps = false;
    protected $filliable = ['name','zipCode','country','description','review','adress'],
}
