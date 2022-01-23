<?php

namespace App;

use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use Notifiable;



    protected $fillable = [
        'name', 'phone', 'email', 'Bank_account_number', 'Date_of_Birth', 'City', 'description', 'photo',
    ];
}
