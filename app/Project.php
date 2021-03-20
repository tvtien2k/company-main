<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';
    protected $primaryKey = 'pr_id';

    public function devision()
    {
        return $this->belongsTo('App\Division', 'dvs_id');
    }

    public function users()
    {
        return $this->hasMany('App\User', 'pr_code', 'br_id');
    }
}