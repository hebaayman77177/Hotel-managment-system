<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model 
{

    protected $table = 'rooms';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('capacity', 'price');

    public function floor()
    {
        return $this->belongsTo('App/Models\Floor', 'id');
    }

    public function manager()
    {
        return $this->belongsTo('App/Models\Employee', 'id');
    }

    public function reservations()
    {
        return $this->hasMany('App/Models\Reservation', 'id');
    }

}