<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    /**
     * Season of the episode.
     */
    public function season()
    {
        return $this->belongsTo('App\Season');
    }
}
