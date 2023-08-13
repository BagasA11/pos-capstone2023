<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Produk;
use App\Models\Supplier;
use Illuminate\Http\Request;

class produkcontroller extends Controller
{
    public function index(){

        return view('product.create');

    }

    public function terserah(){
        $produkTable = Item::all(); // Mengambil semua isi tabel
        return view('product.index', compact('produkTable')); // Mengirim data ke view
    }

    public function create()
    {
        $supply = $this->getSupplier();
        return view('product.create', ['options' => $supply]);
    }

    public function store(Request $request){
        $produk = new Item();

        $produk->nama = $request->nama;
        $produk->sellingPrice = $request->sellingPrice;
        $produk->purchasePrice = $request->purchasePrice;
        $produk->discount = $request->discount;
        $produk->stock = $request->stock;
        $produk->supplierId = $request->supplierId;
        $produk->save();
        if ($produk->save()== true) {
            return redirect()->route('product.index');
        }

        return abort(500);
    }

    public function destroy($id)
    {
        $profil = Item::find($id);
        $delete = $profil->delete();

        if ($delete)
            return redirect()->route('product.index');
        else
            return abort(500);

    }
    public function edit(Item $produk)
    {
        return view("product.edit", compact('produk')); // Menampilkan view edit.blade.php
    }

    public function update(Request $request, Item $produk)
    {

        $produk->update([
            'nama'     => $request->nama,
            'sellingPrice'    => $request->sellingPrice,
            'purchasePrice' => $request->purchasePrice,
            'discount' => $request->discount,
            'stock' => $request->stock
        ]);


        return redirect()->route('product.index')->with('success','User updated successfully');
    }

    protected function getSupplier()
    {
        $supply = Supplier::all();
        return $supply;
    }

}
