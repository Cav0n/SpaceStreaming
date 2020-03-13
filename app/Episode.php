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

    /**
     * Video of the episode.
     */
    public function video()
    {
        return $this->belongsTo('App\Video');
    }

    public function getPreviousEpisodeAttribute()
    {
        return \App\Episode::where('season_id', $this->season->id)->where('number', $this->number - 1)->first();
    }

    public function getNextEpisodeAttribute()
    {
        return \App\Episode::where('season_id', $this->season->id)->where('number', $this->number + 1)->first();
    }
}
