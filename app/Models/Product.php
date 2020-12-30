<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function shipmentFits()
    {
        return $this->belongsToMany(
            ShipmentFit::class,
            'product_fits',
            'product_id',
            'shipment_fit_id'
        );
    }
}
