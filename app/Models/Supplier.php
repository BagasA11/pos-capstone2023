<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = 
    [
        'supplierId',
        'namaPT',
        'addres',
        'contact'
    ];

    //Supplier -> Item
    public function item()
    {
        return $this->hasMany(Item::class);
    }

    //Supplier -> purchaseTransaction
    public function purchase()
    {
        return $this->hasMany(PurchaseTransaction::class);
    } 
}
