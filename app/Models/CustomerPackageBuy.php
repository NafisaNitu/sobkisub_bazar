<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class CustomerPackageBuy extends Model
{
    protected $table = 'customer_package_buy_with_day_amount';
    protected $fillable = ['user_id', 'customer_package', 'customer_package_day_amount_id','remaining_uploads'];

    /**
     * Get the user that owns the CustomerPackageBuy
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function customer_package()
    {
        return $this->belongsTo(CustomerPackage::class);
    }
    public function customer_package_day_amount_id()
    {
        return $this->belongsTo(CustomerPackgeDayTime::class);
    }
}
