{{--menambah user baru--}}
@extends('layouts.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">User</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">User Management</a></li>
                            <li class="breadcrumb-item active">All User</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                {{-- <form action='/supply-post' method="post"> --}}
                <form action='{{route('tambahsupplier')}}' method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Create Supplier <i class="fas fa-check"></i></button>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    {{-- baris 1 --}}
                                    <div class="form-row">
                                        {{-- Id supplier  --}}
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="supplierId">Id supplier : </label>
                                                <input class="form-control" type="text" id="supplierId"
                                                name="supplierId"
                                                placeholder="abc123" required>
                                            </div>
                                        </div>
                                        {{-- namaPT --}}
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="namaPT">nama perusahaan</label>
                                                <input class="form-control" type="text"
                                                 name="namaPT" id="namaPT"
                                                placeholder="PTABC" required> <br>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- baris 2 --}}
                                    <div class="form-row">
                                        {{-- alamat --}}
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="addres"> alamat : </label>
                                                <input class="form-control" 
                                                type="text" id="addres" name="addres" 
                                                required placeholder="Jl.Abc-No.12">
                                            </div>
                                        </div>
                                        {{-- contact --}}
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="contact"> Kontak : </label>
                                                <input class="form-control" type="tel" 
                                                name="contact" 
                                                id="contact" required
                                                placeholder="081212341234">
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="form-group col-lg-6">
                                        <label for="email">email</label>
                                        <input class="form-control" type="email" id="email" required 
                                        name="email"
                                        pattern="^[\w-.]+@([\w-]+.)+[\w-]{2,4}$" placeholder="someone@gmail.com">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
    <!-- /.container-fluid -->
    </section>
</div>
@endsection
