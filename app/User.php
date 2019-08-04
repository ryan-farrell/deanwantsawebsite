<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

   /*The function below is about creating a releationship between the user and 
    their created webpages. Essentially any one single created website belongs 
    to ONE SINGLE 'User' however any 'User' can have many websites. Now SEE the
    other side of this relationship in our 'MakeWebPage.php' model.
    
    THIS SETS A MANY TO ONE RELATIONSHIP. A user can HAVE MANY websites. */

    public function websites(){
        return $this->hasMany('App\MakeWebPage');
    }
}
