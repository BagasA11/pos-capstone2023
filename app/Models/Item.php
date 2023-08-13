<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $fillable = 
    [
        'nama',
        'sellingPrice',
        'purchasePrice',
        'discount',
        'stock'
    ];

    // relational model
    //item -> salesDeatil
    public function salesDetail()
    {
        return $this->hasMany(SalesDetail::class);
    }

    //Item -> Supplier
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    //Item -> PurchaseDetail
    public function purchaseDetail()
    {
        return $this->hasMany(PurchaseDetail::class);
    }
}
