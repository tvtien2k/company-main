<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skill';
    protected $primaryKey = 'sk_id';

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
