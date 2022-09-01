<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class TestClub extends Model
{
    use Notifiable;
    protected $table = 'test_clubs';
    public $timestamps = true;
    protected $fillable = [];
}
