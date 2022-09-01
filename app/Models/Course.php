<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Course extends Model
{
    use Notifiable;
    protected $table = 'courses';
    public $timestamps = true;
    protected $fillable = [];
}
