<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $guarded = ['id'];

    public function model()
    {
        return $this->belongsTo(DeviceModel::class);
    }

    public function brand()
    {
        return $this->belongsTo(DeviceBrand::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, OrderDevice::class)->withPivot('price', 'condition_id');
    }
}
