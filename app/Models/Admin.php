<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject; // this sould be imported

//add the JWTSubject implementation class
class Admin extends Authenticatable implements JWTSubject
{

   //put these methods at the bottom of your class body


   protected $fillable = [
       'name',
       'email',
       'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getJWTIdentifier()
     {
       return $this->getKey();
     }

     public function getJWTCustomClaims()
     {
       return [
         'email'=>$this->email,
         'name'=>$this->name
       ];
     }
}

