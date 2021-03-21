<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectMember extends Model
{
    protected $table = 'project_member';

    public function project()
    {
        return $this->belongsTo('App\Project', 'pr_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
