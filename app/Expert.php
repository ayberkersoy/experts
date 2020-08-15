<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Expert extends Model
{
    use Searchable;

    public function expertise()
    {
        return $this->belongsTo(Expertise::class);
    }
}
