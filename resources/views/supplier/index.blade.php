{{-- halaman supplier--}}
@extends('layouts.master')
@section('content')
<div class="content-wrapper">
    {{-- header --}}
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Supplier</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Supplier Management</a></li>
                        <li class="breadcrumb-item active">All Supplier</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    {{-- content --}}
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('supplier.suppadd') }}" class="btn btn-primary">Add Supplier <i
                                    class="fas fa-plus"></i></a>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>supplierId</th>
                                        <th>nama perusahaan</th>
                                        <th>Alamat</th>
                                        <th>Kontak</th>
                                        <th>Domain Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($supplierTable as $supplier)
                                        <tr>
                                            </td>
                                            <td>{{ $supplier->supplierId }}</td>
                                            <td>{{ $supplier->namaPT }}</td>
                                            
                                            <td>{{ $supplier->addres }}</td>
                                            <td>{{ $supplier->contact }}</td>
                                            <td>{{ $supplier->email }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <i class="fa fa-trash"></i></button>
                                                    <a class="btn btn-primary shadow btn-xs sharp me-1 edit_user"
                                                            href="{{route('purchase.create', $supplier->supplierId)}}">
                                                        beli 
                                                    </a>
                                                    {{-- 
                                                    <form onsubmit="return 
                                                    confirm('Apakah Anda Yakin ?');" 
                                                    action="{{ route('supplier.destroy', 
                                                    $supplier->supplierId) }}" 
                                                    method="POST">

                                                    <a 
                                                    class="btn btn-primary shadow btn-xs sharp me-1 edit_user"
                                                        href="{{route('user.edit', $supplier->supplierId)}}"><i
                                                            class="fas fa-pencil-alt"></i></a>
                                                            @csrf
                                                            @method('DELETE')
                                                        <button type="submit" 
                                                        class="btn btn-danger shadow btn-xs sharp delete_user">
                                                            <i class="fa fa-trash"></i></button>
                                                    </form>
                                                    --}}
                                                </div>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
    </section>    
</div>

@push('scripts')
        <script>
            $('.table').DataTable();
        </script>
@endpush
@endsection