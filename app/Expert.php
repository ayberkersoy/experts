<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Expert extends Model
{
    use Searchable;

    protected $appends = ['full_name'];

    public function expertise()
    {
        return $this->belongsTo(Expertise::class);
    }

    public function getFullNameAttribute()
    {
        return trim($this->name . ' ' . $this->surname);
    }
}
