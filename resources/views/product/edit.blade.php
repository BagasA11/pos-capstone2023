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
                <form action="{{ route('product.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <button class="btn btn-primary">Create Produk <i class="fas fa-check"></i></button>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="name_produk">Name produk <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="nama" id="nama_produk" value="{{$produk->nama}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                            <div class="form-row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="nama_suplier">Harga beli <span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text" name="purchasePrice" id="nama_suplier" value="{{$produk->purchasePrice}}">
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                                 <div class="card-body">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="harga_barang">Harga jual<span class="text-danger">*</span></label>
                                                                <input class="form-control" type="text" name="sellingPrice" id="harga_barang" value="{{$produk->sellingPrice}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                 </div>
                                <div class="card-body">
                                                            <div class="form-row">
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="discount">discount<span class="text-danger">*</span></label>
                                                                        <input class="form-control" type="text" name="discount" id="discount" value="{{$produk->discount}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                </div>
                                                                <div class="card-body">
                                                                    <div class="form-row">
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label for="stok">stok<span class="text-danger">*</span></label>
                                                                                <input class="form-control" type="text" name="stock" id="discount" value="{{$produk->stock}}">
                                                                            </div>
                                                                        </div>
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
