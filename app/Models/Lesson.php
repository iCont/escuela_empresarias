<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    // relacion uno a uno
    public function description(){
        return $this->hasOne('App\Models\Description');
    }

    // RELACION UNO A MUCHSO INVERSA
    public function section(){
        return $this->belongsTo('App\Models\Section');
    }
    public function platform(){
        return $this->belongsTo('App\Models\Platform');
    }
    // relacion muchos a muchos
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
    // relacion uno a uno polimorfica
    // recibe el modelo y el del metodo resourceble
    public function resource(){
        return $this->morphOne('App\Models\Resource','resourceable');
    }

// relacion uno a muchos polimorfica
public function comments(){
    return $this->morphMany('App\Models\Comment','commentable');
    }
public function reactions(){
    return $this->morphMany('App\Models\Reaction','reactionable');
    }

}

