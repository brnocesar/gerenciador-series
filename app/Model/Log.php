<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = ['route', 'request', 'user_id'];

    protected $casts = [
        'request' => 'object'
    ];

    public function parameters(): array
    {
        return [];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
