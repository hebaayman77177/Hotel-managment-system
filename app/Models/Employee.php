<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    protected $table = 'employees';
    protected $guard = 'employee';
    use SoftDeletes, Notifiable, HasFactory;
    public $timestamps = true;
    protected $dates = ['deleted_at'];
    protected $fillable = array('email', 'name', 'password', 'national_id', 'avatar_img', 'manager_id', 'role', 'is_banned');

    public function manager()
    {
        return $this->belongsTo('App\Models\Employee', 'manager_id');
    }

    public function employees()
    {
        return $this->hasMany('App\Models\Employee', 'id');
    }

    public function floors()
    {
        return $this->hasMany('App\Models\Floor', 'id');
    }

    public function rooms()
    {
        return $this->hasMany('App\Models\Room', 'id');
    }

    public function approvedClients()
    {
        return $this->hasMany('App\Models\Client', 'id');
    }
}
