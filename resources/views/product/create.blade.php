@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Produk</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Product Management</a></li>
                            <li class="breadcrumb-item active">All Product</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <button class="btn btn-primary">Create Produk <i class="fas fa-check"></i></button>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                {{-- nama produk --}}
                                {{-- row 1 --}}
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="col-10">
                                            <div class="form-group">
                                                <label for="name_produk">
                                                    Name produk <span class="text-danger">*</span>
                                                </label>
                                                <input class="form-control" 
                                                type="text" name="nama" id="nama_produk">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- row 2 --}}
                                <div class="card-body">
                                    <div class="form-row">
                                        {{-- col 1 --}}
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nama_suplier">
                                                    Harga beli <span class="text-danger">*</span>
                                                </label>
                                                <input class="form-control" type="text" name="purchasePrice" id="nama_suplier">
                                            </div>
                                        </div>
                                        {{-- col 2 --}}
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="harga_barang">
                                                    Harga jual<span class="text-danger">*</span>
                                                </label>
                                                <input class="form-control" 
                                                type="text" name="sellingPrice" id="harga_barang">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- row 3 --}}
                                <div class="card-body mb-0">
                                    <div class="form-row">
                                        {{-- col 1 --}}
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="stok">stok<span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="stock" id="discount">
                                            </div>
                                        </div>
                                        {{-- col 2 --}}
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="discount">
                                                    discount<span class="text-danger">*</span>
                                                </label>
                                                <input class="form-control" type="text" name="discount" id="discount">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- row 4 --}}
                                <div class="card-body mt-0">
                                    <div class="form-row">
                                        <div class="col-10">
                                            <div class="form-group">
                                                <label for="discount">
                                                    Pilih Supplier<span class="text-danger">*</span>
                                                </label>
                                                <select class="form-control" name="supplierId" id="supplierId" required>
                                                @foreach ($options as $option)
                                                    <option value="{{$option->supplierId}}" style="text-align: center">
                                                        {{$option->namaPT}}
                                                    </option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
@endsection

                                    {{-- <div class="form-group">
                                <label for="role">Role <span class="text-danger">*</span></label>
                                <select class="form-control" name="role" id="role" required>
                                    <option value="" selected disabled>Select Role</option>
                                    @foreach (\Spatie\Permission\Models\Role::where('name', '!=', 'Super Admin')->get() as $role)
                                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div> --}}







    <!-- /.container-fluid -->



{{-- <div>
    <div class="row">
        <label for="id" value="id">id</label>
        <input type="text" name="id"  class="form-control" value="{{$produk->id}}">

          <label for="judul" value="judul">Email address</label>
          <input type="text" name="judul"  class="form-control" value="{{$produk->judul}}">

          <label for="deskripsi" value="deskripsi">deskripsi</label>
          <input type="text" name="deskripsi" class="form-control" value="{{$produk->deskripsi}}">

        </div>

        <button type="submit" class="btn btn-primary" >Submit</button>
      </form>
</div> --}}

{{-- <div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">1</th>
            <th scope="col">2</th>
            <th scope="col">action</th>


          </tr>
        </thead>
        @foreach ($produk as $item)
        <tbody>
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->judul}}</td>
            <td>{{$item->deskripsi}}</td>
            <td>
                <a href="{{ route('profil.edit', $item->id) }}" class="btn btn-primary btn-lg">Edit</a>
                <form action="{{ route('profil.destroy', $item->id) }}" method="POST">
                @csrf
                @method('delete')
                <button>Hapus</button>
                </form>
            </td>


          </tr>

        </tbody>
        @endforeach
      </table>
</div> --}}

