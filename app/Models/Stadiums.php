<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadiums extends Model
{
    // use HasFactory;

    public $table = 'stadiums';


    // permisson yang dapat diisi
    protected $fillable = [
        'name' ,
        'capacity',
        'address',
        'created_at' ,
        'updated_at',
    ];

    public function clubs(){
        return $this->hasOne('App\Models\Clubs' , 'stadiums_id');
    }
}
