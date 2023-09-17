<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clubs extends Model
{
    // use HasFactory;

    public $table = 'clubs';

    protected $fillable = [
        'stadiums_id',
        'name' ,
        'logo' ,
        'url' ,
        'thropy',
        'created_at' ,
        'updated_at' ,
    ];

    public function stadiums(){
        return $this->belongsTo('App/Models/Stadiums' , 'stadiums_id' , 'id');
    }

    public function managers(){
        return $this->hasMany('App/Models/Managers' , 'clubs_id');
    }

    public function players(){
        return $this->hasMany('App/Models/Players' , 'clubs_id');
    }

    public function matchs(){
        return $this->hasOne('App/Models/Matchs' , 'clubs_id');
    }

    public function matchs2(){
        return $this->hasOne('App/Models/Matchs' , 'rivals_id');
    }

}
