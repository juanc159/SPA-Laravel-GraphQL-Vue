<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description',' manager_id'
    ];

    //relacion uno a uno
    public function manager(){
        return $this->belongsTo('App\Models\User','manager_id');
    }

    //relacion de uno a muchos
    public function tasks(){
        return $this->hasMany('App\Models\Task');
    }

    //relacion muchos a muchos
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

}
