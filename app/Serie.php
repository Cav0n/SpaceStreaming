<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    /**
     * Seasons of the serie.
     */
    public function seasons()
    {
        return $this->hasMany('App\Season');
    }
}
