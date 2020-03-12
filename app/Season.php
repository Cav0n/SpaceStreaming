<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    /**
     * Serie of the season.
     */
    public function serie()
    {
        return $this->belongsTo('App\Serie');
    }

    /**
     * Episodes of the season.
     */
    public function episodes()
    {
        return $this->hasMany('App\Episode');
    }
}
