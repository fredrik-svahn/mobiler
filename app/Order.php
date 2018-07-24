<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function devices()
    {
        return $this->belongsToMany(Device::class, OrderDevice::class)->withPivot('price', 'condition_id');
    }
}
