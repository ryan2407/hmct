<?php namespace HMCT\Bookings;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model {

    protected $fillable = ['dates', 'user_id', 'product_id'];

    public function user()
    {
        return $this->belongsTo('HMCT\Users\User');
    }

    public function product()
    {
        return $this->belongsToMany('HMCT\Products\Product')->withTimestamps();
    }

    public function totalCost($product, $dates)
    {
        $dateArray = explode(', ', $dates);
        $cost = count($dateArray) * $product->product_cost / 100;
        return $cost;
    }

} 