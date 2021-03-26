<?php

namespace App\Models;

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
        return $this->belongsTo('App\Models\Client', 'id');
    }

    public function room()
    {
        return $this->belongsTo('App\Models\Room', 'number');
    }

}