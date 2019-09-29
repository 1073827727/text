<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    //消息通知相关功能的引用
    /**
     * The attributes that are mass assignable.
     *
     * @var arrays
     */



    protected $fillable = [
        //填补功能，只有包含在该属性的字段才能被更新
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array

     */
    protected $hidden = [
        //对用户密码或其它敏感信息在用户实例通过数组或 JSON 显示时进行隐藏，则可使用  hidden  属性
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
}
