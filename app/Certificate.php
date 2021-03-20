<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $table = 'certificate';
    protected $primaryKey = 'cer_id';

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
