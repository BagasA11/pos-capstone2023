<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index()
    {
        $supplierTable = Supplier::all(); // Mengambil semua isi tabel
        return view('supplier.index', compact('supplierTable')); // Mengirim data ke view
    }
    //
    public function create()
    {
        return view('supplier.suppadd');
    }

    public function store(Request $req)
    {   
        //session validation
        /*$getSession = $this->userSesssion($req);
        
        |bail
        |bail
        |bail
        |bail
        */

        $req->validate([
            'supplierId'=>"required|unique:suppliers,supplierId",
            'namaPT'=>"required",
            'addres'=>'required',
            'contact'=>'required',
            'email'=>'required|email:dns|unique:suppliers,email'
        ]);

        $supplier = new Supplier();
        $supplier->supplierId = $req->supplierId;
        $supplier->namaPT = $req->namaPT;
        $supplier->addres = $req->addres;
        $supplier->contact = $req->contact;
        $supplier->email = $req->email;
        $supplier->save();

        dd($req->all());
        //return redirect()->route('supplier.index');
    }

    protected function userSesssion(Request $req)
    {
        $session = $req->session()->get('auth.password_confirmed_at');
        return $session; 
    }
}
