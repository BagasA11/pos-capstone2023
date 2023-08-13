<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseTransaction extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'purchase_id',
        'supplierId',
        'idKaryawan'
    ];

    //purchaseTransaction -> user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //purchaseTransaction -> purchaseDetail
    public function purchaseDetail()
    {
        return $this->hasMany(PurchaseDetail::class);
    }

    //purchaseTransaction -> supplier
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
