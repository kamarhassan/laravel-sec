<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Offer extends Model
{
//    protected $table = "offers";
    protected $fillable = ['name', 'price', 'details', 'created_at', 'updated_at','lang'];
    protected $hidden = ['created_at','updated_at','lang'];
//    public $timestamps=false;
}
