<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FruitPriceList extends Model
{
    use HasFactory;
    protected $table = 'fruit_price_lists';

    protected $guarded = ['id'];

    public function userInformation()
    {
        return $this->belongsTo(Admin::class,'reg_id');
    }

    public function updaterInformation()
    {
        return $this->belongsTo(Admin::class,'upd_id');
    }

    public function priceListTransitions ()
    {
        return $this->hasMany(FruitPriceListTransition::class, 'f_id');
    }

}
