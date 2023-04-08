<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReturnProduct extends Model
{
    protected $table = 'return_products';

    protected $fillable = ['return_product_id', 'customer_id', 'seller_id', 'quantity', 'mobile_number', 'images', 'video', 'cause_description', 'return_money', 'return_money_number'];

    /**
     * Get the user that owns the ReturnProduct
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id', 'id');
    }
    public function order()
    {
        return $this->belongsTo(Order::class, 'return_product_id', 'id');
    }
    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id', 'id');
    }
}
