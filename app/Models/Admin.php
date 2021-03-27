<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{

    protected $table = 'admins';
    protected $guard = 'admin';
    public $timestamps = true;

    use SoftDeletes, Notifiable;

    protected $dates = ['deleted_at'];
    protected $fillable = array('email', 'password');
}
