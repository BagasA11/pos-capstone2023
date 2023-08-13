<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesTransaction extends Model
{
    use HasFactory;
    
    protected $fillable = 
    [
        'idKaryawan'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function salesDetail()
    {
        return $this->hasMany(SalesDetail::class);
    }
}
