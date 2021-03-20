<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'progile';
    protected $primaryKey = 'code';
    public $incrementing = false;

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function project()
    {
        return $this->belongsTo('App\Project', 'pr_code');
    }
}