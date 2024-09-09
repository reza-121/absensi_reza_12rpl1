<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use  Illuminate\Foundation\Auth\User as Authenticatble;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Karyawan extends Authenticatble
{
    use HasFactory, Notifiable;
    protected $hidden = ["password"];
    protected $guarded = [];
    public $timestamps = false;

}
