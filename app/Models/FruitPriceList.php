<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FruitPriceList extends Model
{
    use HasFactory;
    protected $table = 'fruit_price_lists';

    protected $guarded = ['id'];
}
