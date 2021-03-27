<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{


    protected $fillable = array('room_number','is_approved','room_number', 'paid_price', 'accompany_number', 'room_number', 'client_id');
    use HasFactory, SoftDeletes;
    protected $table = 'reservations';
    public $timestamps = true;
    protected $dates = ['deleted_at'];

    public function client()
    {
        return $this->belongsTo('App\Models\Client', 'id');
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model 
{

    protected $table = 'reservations';
    public $timestamps = true;

    use HasFactory,SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('client_id', 'room_number', 'accompany_number', 'paid_price', 'from_date', 'to_date', 'is_approved');

    public function client()
    {
        return $this->belongsTo('App/Models\Client', 'id');
>>>>>>> 070b939c3290b4442cbda630b164684e938d646b
    }

    public function room()
    {
<<<<<<< HEAD
        return $this->belongsTo('App\Models\Room', 'number');
    }
}
=======
        return $this->belongsTo('App/Models\Room', 'number');
    }

}
>>>>>>> 070b939c3290b4442cbda630b164684e938d646b
