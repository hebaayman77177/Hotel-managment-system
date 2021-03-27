<?php
<<<<<<< HEAD
=======

>>>>>>> 070b939c3290b4442cbda630b164684e938d646b
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
<<<<<<< HEAD
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;


class Employee extends Authenticatable
{
    protected $table = 'employees';
    protected $guard = 'employee';
    use SoftDeletes, Notifiable, HasFactory;
    public $timestamps = true;
=======

class Employee extends Model 
{

    protected $table = 'employees';
    public $timestamps = true;

    use SoftDeletes;

>>>>>>> 070b939c3290b4442cbda630b164684e938d646b
    protected $dates = ['deleted_at'];
    protected $fillable = array('email', 'name', 'password', 'national_id', 'avatar_img', 'manager_id', 'role', 'is_banned');

    public function manager()
    {
<<<<<<< HEAD
        return $this->belongsTo('App\Models\Employee', 'manager_id');
=======
        return $this->belongsTo('App/Models\Employee', 'manager_id');
>>>>>>> 070b939c3290b4442cbda630b164684e938d646b
    }

    public function employees()
    {
<<<<<<< HEAD
        return $this->hasMany('App\Models\Employee', 'id');
=======
        return $this->hasMany('App/Models\Employee', 'id');
>>>>>>> 070b939c3290b4442cbda630b164684e938d646b
    }

    public function floors()
    {
<<<<<<< HEAD
        return $this->hasMany('App\Models\Floor', 'id');
=======
        return $this->hasMany('App/Models\Floor', 'id');
>>>>>>> 070b939c3290b4442cbda630b164684e938d646b
    }

    public function rooms()
    {
<<<<<<< HEAD
        return $this->hasMany('App\Models\Room', 'id');
=======
        return $this->hasMany('App/Models\Room', 'id');
>>>>>>> 070b939c3290b4442cbda630b164684e938d646b
    }

    public function approvedClients()
    {
<<<<<<< HEAD
        return $this->hasMany('App\Models\Client', 'id');
    }
}
=======
        return $this->hasMany('App/Models\Client', 'id');
    }

}
>>>>>>> 070b939c3290b4442cbda630b164684e938d646b
