<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class images extends Model
{

    use Notifiable;

    protected $fillable = [
        'photo', 'title',
    ];
}
