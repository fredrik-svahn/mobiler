<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeviceBrand extends Model
{
    protected $table = "brands";

    public function devices()
    {
        return $this->hasMany(Device::class);
    }
}
