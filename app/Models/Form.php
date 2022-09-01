<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Form extends Model
{
    use Notifiable;
    protected $table = 'forms';
    public $timestamps = true;
    protected $fillable = [];
}
