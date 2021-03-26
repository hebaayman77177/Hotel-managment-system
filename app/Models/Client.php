<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Cashier\Billable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{

    protected $table = 'clients';
    protected $guard = 'client';
    use Billable, HasFactory, SoftDeletes, Notifiable;

    protected $dates = ['deleted_at'];
    protected $fillable = array('is_approved', 'password', 'receptionist_id', 'name', 'email', 'mobile', 'country', 'avatar_img');

    public function approvedReceptionist()
    {
    return $this->belongsTo('App/Models\Employee', 'id');
    }

    public function reservations()
    {
        return $this->hasMany('App/Models\Reservation', 'id');
    }
}
