<?php

<<<<<<< HEAD
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{

    protected $table = 'admins';
    protected $guard = 'admin';
    public $timestamps = true;

    use SoftDeletes, Notifiable;

    protected $dates = ['deleted_at'];
    protected $fillable = array('email', 'password');
}
=======
namespace App/Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model 
{

    protected $table = 'admins';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('email', 'password');

}
>>>>>>> 070b939c3290b4442cbda630b164684e938d646b
