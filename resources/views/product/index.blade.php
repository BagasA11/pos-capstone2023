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
                            <li class="breadcrumb-item active">All Produk</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('product.create') }}" class="btn btn-primary">Add Produk <i
                                        class="fas fa-plus"></i></a>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Selling</th>
                                            <th>Purchase</th>
                                            <th style="width: 15px">Discount</th>
                                            <th>Stock</th>
                                            <th>supplier</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($produkTable as $product)
                                            <tr>
                                                </td>
                                                <td>{{ $product->nama }}</td>
                                                <td>{{ $product->sellingPrice }}</td>
                                                <td>{{ $product->purchasePrice }}</td>
                                                <td style="width: 15px">{{ $product->discount }}</td>
                                                <td>{{ $product->stock}}</td>
                                                <td>
                                                    {{$product->supplierId}}
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a class="btn btn-primary shadow btn-xs sharp me-1 edit_user"
                                                            href="{{route('product.edit', $product->id)}}"><i
                                                                class="fas fa-pencil-alt"></i></a>
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

    <!-- Modal -->



    @push('scripts')
        <script>
            $('.table').DataTable();
        </script>
    @endpush
@endsection
