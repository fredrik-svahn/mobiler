<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeviceModel extends Model
{
    protected $table = "models";

    public function devices()
    {
        return $this->hasMany(Device::class);
    }
}
