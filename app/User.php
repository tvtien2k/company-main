<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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

    public function division()
    {
        return $this->belongsTo('App\Division', 'dvs_id');
    }

    public function project()
    {
        return $this->belongsTo('App\Project', 'pr_id');
    }

    public function certificates()
    {
        return $this->hasMany('App\Certificate', 'user_id', 'id');
    }

    public function skills()
    {
        return $this->hasMany('App\Skill', 'user_id', 'id');
    }
}
