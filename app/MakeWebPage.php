<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MakeWebPage extends Model
{
    // Read up on the model documentation.

    //Table Name
    protected $table = 'make_web_pages';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

    /*The function below is about creating a releationship between the user and 
    their created webpages. Essentially any one single created website belongs 
    to ONE SINGLE 'User'. Now SEE the other side of this relationship in our 'User.php' model.
    
    THIS SETS A ONE TO ONE RELATIONSHIP. A created website can only have ONE USER (the one who 
    created it of course). */

    public function user(){
        return $this->belongsTo('App\User');
    }



}
 