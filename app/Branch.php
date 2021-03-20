<?php


namespace App;

use Illuminate\Database\Eloquent\Model;


class Branch extends Model
{
    protected $table = 'branch';
    protected $primaryKey = 'br_id';

    public function company()
    {
        return $this->belongsTo('App\Company', 'cpn_id');
    }

    public function divisions()
    {
        return $this->hasMany('App\Division', 'br_id', 'br_id ');
    }
}