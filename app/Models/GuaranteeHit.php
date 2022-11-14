<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuaranteeHit extends Model
{
    use HasFactory;
    protected $table = 'guarantees';

    public function consumptive(){
        return $this->hasOne(GuaranteeConsumptive::class,'guarantee_id','id');
    }
}
