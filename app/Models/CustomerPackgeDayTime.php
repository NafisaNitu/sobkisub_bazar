<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerPackgeDayTime extends Model
{
    use HasFactory;

    protected $table = 'customer_package_day_amount';

    protected $fillable =['customer_package_id','days','amount'];

    /**
     * Get the user that owns the CustomerPackgeDayTime
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customerPackage()
    {
        return $this->belongsTo(CustomerPackage::class, 'customer_package_id', 'id');
    }

}
