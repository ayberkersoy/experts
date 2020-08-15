<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    protected $guarded = [];

    public function experts()
    {
        return $this->hasMany(Expert::class);
    }
}
