<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    protected $table = "adresss";
    protected $fillable = ['user_id',' `country`', 'city', 'street', 'nb_street'];
    protected $hidden = ['created_at','updated_at'];
//    public $timestamps=false;



    public function user(){
        return $this->belongsTo('App\user','user_id');
    }
}
