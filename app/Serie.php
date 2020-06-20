<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $fillable = [
        'nome'
    ];

    
    public function temporadas()
    {
        return $this->hasMany(Temporada::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }


    public function addedToUser()
    {
        return $this->users->contains(auth()->user()->id);
    }
}
