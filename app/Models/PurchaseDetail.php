<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetail extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = 
    [
        'qty',
        'purchasePrice',
        'item_id',
        'purchase_id'
    ];

    //PurchaseDetail -> purchaseTransaction
    public function purchase()
    {
        return $this->belongsTo(PurchaseTransaction::class);
    }

    //PurchaseDetail -> Item
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
