<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Models\PurchaseTransaction;
use App\Models\PurchaseDetail;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\JoinClause;

class PurchaseController extends Controller
{
    //
    public function index()
    {
        $purchases = DB::table('purchase_transactions')
            ->join('users', 'users.id', '=', 'purchase_transactions.user_id')
            ->join('suppliers', 'suppliers.supplierId', '=', 'purchase_transactions.supplierId')
            ->select('purchase_transactions.*', 'suppliers.namaPT', 'users.username')
            ->get();

        return view('purchase.index', compact('purchases'));
    }

    public function detail($index)
    {
       $detail = DB::table('purchase_details')
       ->where('purchase_id', '=', $index)
       ->join('items', 'items.id', '=', 'purchase_details.item_id')
       ->select('purchase_details.*', 'items.nama')
       ->get();
       
       $id = PurchaseDetail::where('purchase_id', '=', $index)->first();
        $total = $this->getTotal($index);
        
        return view('purchase.detail', 
        [
         'detail' => $detail,
         'id' => $id,
         'total' => $total
        ]);
    }
       

    public function create($suppId)
    {
        //mendapatkan data supplier
        /*$item = $this->getItem($suppId);
       return view('purchase.create', 
       [
        'item' => $item,
        'id' => $suppId->supplierId
       ]);*/
    }

    protected function getItem($suppId)
    {
        //mendapat kan data item berdasarkan id supplier
        $item = DB::table('items')
        //->join('suppliers', 'suppliers.supplierId', '=', $suppId)
        ->get();
        return $item;
    }
    
    /* get total of purchasing price based on purchase id */
    protected function getTotal($id)
    {
        $detail = PurchaseDetail::select('purchasePrice', 'qty')
        ->where('purchase_id', '=', $id)
        ->get();
       
        return $this->sum($detail);
        
    }
    
    protected function sum($obj)
    {
        $total = 0;
        foreach ($obj as $sum):
            $total += ($sum->purchasePrice * $sum->qty);
        endforeach;
        return $total;
    }
}