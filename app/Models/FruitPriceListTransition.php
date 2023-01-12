<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FruitPriceListTransition extends Model
{
    use HasFactory;
    protected $table = 'price_list_transitions';

    public function fruitInformation()
    {
        return $this->hasMany(FruitPriceList::class,'f_id');
    }

    public function userInformation()
    {
        return $this->hasMany(Admin::class,'edit_id');
    }

    public function fruit () {
        return $this->belongsTo(FruitPriceList::class, 'f_id', 'id');
    }
}
