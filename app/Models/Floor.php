<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Floor extends Model 
{

    protected $table = 'floors';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'manager_id');

    public function manager()
    {
        return $this->belongsTo('Employee', 'id');
    }

    public function rooms()
    {
        return $this->hasMany('Room', 'id');
    }

}