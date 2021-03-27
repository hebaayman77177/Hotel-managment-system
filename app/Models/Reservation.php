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
    protected $guarded = ['id'];
    // protected $fillable = array('is_approved','paid_price','room_number','client_id', 'accompany_number');

    public function client()
    {
        return $this->belongsTo('App\Models\Client', 'id');
    }

    public function room()
    {
        return $this->belongsTo('App\Models\Room', 'number');
    }

}