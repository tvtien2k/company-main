<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';
    protected $primaryKey = 'pr_id';

    public function division()
    {
        return $this->belongsTo('App\Division', 'dvs_id');
    }

    public function pm()
    {
        return $this->belongsTo('App\User', 'pr_pm');
    }

    public function members()
    {
        return $this->hasMany('App\ProjectMember', 'pr_id', 'pr_id');
    }
}