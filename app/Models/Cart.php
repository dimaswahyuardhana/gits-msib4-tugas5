<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $fillable = ['product_id', 'qty', 'sub_total'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
