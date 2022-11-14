<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuaranteeConsumptive extends Model
{
    use HasFactory;

    public function guarantee(){
        return $this->belongsTo(GuaranteeHit::class,'guarantee_id');
    }
}
