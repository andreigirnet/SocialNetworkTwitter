<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'name',
        'email',
        'avatar',
        'password',
        'banner_avatar',
        'profile_description'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($value)
    {
        if($value){
            return asset('/storage/'.$value);
        }
        return asset('/images/img.png');

    }
    public function setPasswordAttribute($value)
    {
        $this->attributes['password']= bcrypt($value);
    }

    public function timeline()
    {
        $friends= $this->follows()->pluck('id');

       return Tweet::whereIn('user_id', $friends)->orWhere('user_id', $this->id)->withLikes()->latest()->paginate(50);
    }
    public function tweets(){
      return $this->hasMany(Tweet::class);
    }
    public function path($append = ''){
     $path =  route('profile', $this->username);
        return $append ? "$path/$append" : $path;
    }
    public function likes(){
        return $this->hasMany(Like::class);
    }

}
