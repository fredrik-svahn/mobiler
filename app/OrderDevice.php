<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDevice extends Model
{
    protected $guarded = ['id'];

    public function condition()
    {
        return $this->belongsTo(Condition::class);
    }
}
