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
}
