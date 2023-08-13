<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    #retrieve all data and send to view
    public function index()
    {
        $userTable = User::all(); // Mengambil semua isi tabel
        return view('user.index', compact('userTable')); // Mengirim data ke view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    #create new user from dashboard
        //form tambah user
    public function create()
    {
            return view("user.create"); // Menampilkan view create.blade.php
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        //menyimpan data user baru dari form
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'username'    => 'required|max:255|unique:users,username',
            'password' => 'required|string|min:8|max:255|confirmed'
        ]);

        User::create([
            'name'     => $request->name,
            'username'    => $request->username,
            'password' => Hash::make($request->password),
            'is_active' => $request->is_active
        ]);

        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan'); // Kembali ke halaman utama
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    # edit user 
        //menuju form edit user
    public function edit(User $user)
    {
        return view("user.edit", compact('user')); // Menampilkan view edit.blade.php
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

        //edit user
    public function update(Request $request, User $user)
    {

        $request->validate([
            'name'     => 'required|string|max:255',
            'username'    => 'required|max:255|unique:users,username,'.$user->id,
        ]);

        $user->update([
            'name'     => $request->name,
            'username'    => $request->username,
            'is_active' => $request->is_active,
        ]); 
        

        return redirect()->route('user.index')->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $delete = $users->delete();

        if ($delete)
            return redirect()->route('user.index')->with('success','Student deleted successfully');
        else
            return abort(500);
        
    }
}
