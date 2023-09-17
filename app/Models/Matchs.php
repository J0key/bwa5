<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matchs extends Model
{
    // use HasFactory;

    public $table = 'matchs';

    protected $fillable = [
        'clubs_id',
        'rivals_id',
        'schedule',
        'created_at' ,  
        'updated_at',
    ];

    public function clubsid(){
        return $this->belongsTo('App/Models/Clubs' , 'clubs_id' , 'id');
    }

    public function rivalsid(){
        return $this->belongsTo('App/Models/Clubs' , 'rivals_id' , 'id');
    }
}
