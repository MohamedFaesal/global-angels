<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function states()
    {
        return $this->hasMany(State::class, 'country_id')->orderBy('name');
    }
}
