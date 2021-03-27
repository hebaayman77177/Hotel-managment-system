<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'reservations';
    public $timestamps = true;
    protected $dates = ['deleted_at'];

    protected $fillable = array('is_approved', 'paid_price', 'accompany_number', 'room_number', 'client_id');

    public function client()
    {
        return $this->belongsTo('App\Models\Client', 'id');
    }

    public function room()
    {
        return $this->belongsTo('App\Models\Room', 'number');
    }
}
