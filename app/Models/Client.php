<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Cashier\Billable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Client extends Authenticatable
{

    use HasFactory, Notifiable;

    protected $table = 'clients';
    public $timestamps = true;
    protected $guard = 'client';
    use Billable, HasFactory, SoftDeletes, Notifiable;


    protected $dates = ['deleted_at'];
    protected $fillable = array('is_approved', 'password', 'receptionist_id', 'name', 'email', 'mobile', 'country', 'avatar_img','gender');

    public function approvedReceptionist()
    {
    return $this->belongsTo('App\Models\Employee', 'id');
    }

    public function reservations()
    {
        return $this->hasMany('App\Models\Reservation', 'id');
    }
}
