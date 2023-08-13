<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
//use Symfony\Component\HttpFoundation\Session\Session;

//model
use App\Models\Supplier;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function supplier(Request $req)
    {   
        //session validation
        $getSession = $this->userSesssion($req);
        if(!isset($getSession))
        {
            //echo '123';
            return redirect()->route('login');
        }

        //echo $getSession;
        $req->validate([
            'supplierId'=>"required|unique:suppliers,supplierId|bail",
            'namaPT'=>"required|bail",
            'addres'=>'required|bail',
            'contact'=>'required|bail',
            'email'=>'required|email:dns'
        ]);

        $save = new Supplier();
        $save->supplierId = $req->supplierId;
        $save->namaPT = $req->namaPT;
        $save->addres = $req->addres;
        $save->contact = $req->contact;
        $save->email = $req->email;

        $save->save();
        return redirect()->route('home');
    }

    protected function userSesssion(Request $req)
    {
        $session = $req->session()->get('auth.password_confirmed_at');
        return $session; 
    }
}
