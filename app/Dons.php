<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dons extends Model
{
    public function usersDons()
    {
        return $this->belongsTo('App\User');
    }

    public function projectsDons()
    {
        return $this->belongsTo('App\Project');
    }
}
