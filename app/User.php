<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'surname','name','fathersname', 'email', 'password',
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
    public function status()
    {
        $check=Friend_Request::where([
            ['from_id','=',$this->id],
            ['to_id','=',Auth::user()->id],
        ])->get();
        if (!($check->isEmpty())) {
            return "Ваш подписчик";
        }
        $check=Friend_Request::where([
            ['to_id','=',$this->id],
            ['from_id','=',Auth::user()->id],
        ])->get();
        if (!($check->isEmpty())) {
            return "Запрос отправлен";
        }
        $check=Friend::where([
            ['user_id','=',$this->id],
            ['friend_id','=',Auth::user()->id],
        ])->get();
        if (!($check->isEmpty())) {
            return "Ваш друг";
        }
    }
}
