<?php

namespace App/Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model 
{

    protected $table = 'clients';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('is_approved', 'receptionist_id', 'name', 'email', 'mobile', 'country', 'avatar_img');

    public function approvedReceptionist()
    {
        return $this->belongsTo('App/Models\Employee', 'id');
    }

    public function reservations()
    {
        return $this->hasMany('App/Models\Reservation', 'id');
    }

}