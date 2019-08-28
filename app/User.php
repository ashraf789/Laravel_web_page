<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

// use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Model{
    
    protected $fillable = [
        'name', 'email', 'password','remember_token',
    ];

    public function show(){
        echo $fillable['name'];
    }
}
?>
