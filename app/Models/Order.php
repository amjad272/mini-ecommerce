<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [

        'product_id',

        'user_id',

        'status',

        'quantity',

        'price_per_item',

        'total_price',

    ];

    public function product()

    {

        return $this->belongsTo(Product::class);

    }

    public function user()

    {

        return $this->belongsTo(User::class);

    }
}
