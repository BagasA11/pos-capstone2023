<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesDetail extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = 
    [
        'qty',
        'sellingPrice',
        'purchasePrice',
        'sales_id',
        'item_id'
    ];

    public function sales()
    {
        return $this->belongsTo(SalesTransaction::class);
    }

    //salesDetail -> Item
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
