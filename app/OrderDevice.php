<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDevice extends Model
{
    public function condition()
    {
        return $this->belongsTo(Condition::class);
    }
}
