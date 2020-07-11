<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone_no', 'password',
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

    public function getNameAttribute()
    {
        return $this->first_name." ".$this->last_name; 
    }
    public function isSuperAdmin()
    {
        return true;
    }

    public function roles()
    {
        return $this->belongsToMany('Sagartakle\Laracrud\Models\Role','role_user');
    }
    
    /**
     * get context by context_id of this user
     * @return context
     */
    public function context()
    {
        return $this->morphTo();
    }

    /**
     * get profile_pic by context_id of this user
     * @return profile_pic
     */
    public function profile_pic()
    {
        if(isset($this->profile_pic) && $this->profile_pic != "0") {
            return \CustomHelper::img($this->profile_pic);
        } else if(isset($this->gender) && $this->gender == "Female") {
            return asset('public/img/female_profile.jpg');
        } else {
            return asset('public/img/male_profile.jpg');
        }
    }
}
