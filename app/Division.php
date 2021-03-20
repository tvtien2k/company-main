<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $table = 'division';
    protected $primaryKey = 'dvs_id';

    public function branch()
    {
        return $this->belongsTo('App\Branch', 'br_id');
    }

    public function projects()
    {
        return $this->hasMany('App\Project', 'dvs_id', 'dvs_id');
    }

    public function users()
    {
        return $this->hasMany('App\Profile', 'dvs_id', 'dvs_id');
    }

}