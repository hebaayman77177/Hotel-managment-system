<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model 
{

    protected $table = 'employees';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('email', 'name', 'password', 'national_id', 'avatar_img', 'manager_id', 'role', 'is_banned');

    public function manager()
    {
        return $this->belongsTo('App/Models\Employee', 'manager_id');
    }

    public function employees()
    {
        return $this->hasMany('App/Models\Employee', 'id');
    }

    public function floors()
    {
        return $this->hasMany('App/Models\Floor', 'id');
    }

    public function rooms()
    {
        return $this->hasMany('App/Models\Room', 'id');
    }

    public function approvedClients()
    {
        return $this->hasMany('App/Models\Client', 'id');
    }

}