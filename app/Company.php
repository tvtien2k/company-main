<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';
    protected $primaryKey = 'cpn_id';

    public function branchs()
    {
        return $this->hasMany('App\Branch', 'cpn_id', 'cpn_id');
    }
}
