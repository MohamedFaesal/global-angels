<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function countryFrom()
    {
        return $this->belongsTo(Country::class, 'country_from');
    }

    public function countryTo()
    {
        return $this->belongsTo(Country::class, 'country_to');
    }
}
