<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    const PRODUCTO_DISPONIBLE = 'disponible';
    const PRODUCTO_NO_DISPONIBLE = 'no disponible';
    protected $dates = ['deleted_at'];

    protected $fillable =
        [
            'name',
            'description',
            'quantity',
            'status',
            'image',
            'seller_id'
        ];
    public function seller() {
        return $this->belongsTo(Seller::class);
    }
    public function transaction() {
        return $this->hasMany(Transaction::class);
    }

    public function categories () {
        return $this->belongsToMany(Category::class);
    }
}
