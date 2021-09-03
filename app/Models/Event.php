<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The table association with SocialIdentity.
     *
     * @var array
     */
    public function workshops() {
        return $this->hasMany('App\Models\Workshop');
    }
}
