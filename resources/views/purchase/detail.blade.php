{{-- user --}}
@extends('layouts.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Detail Pembelian</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li><p>id pembelian : </p></li>
                            <li class="breadcrumb-item">
                                <a href={{route('purchase.index')}}>
                                    
                                    {{$id->purchase_id}}
                                </a>
                            </li>

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
                                {{-- {{ route('user.create') }}--}}
                                
                                <a href="#" class="btn btn-primary">add user <i
                                        class="fas fa-plus"></i>
                                </a>
                            </div>

                            <div class="card-body">

                                <div class="row mb-3 justify-content-start">
                                    <label for="total" class="col-sm col-form-label col-form-label-sm">
                                        <h6>total :</h6>
                                    </label>
                                    <div class="col-sm-3 .ms-1" style="justify-self: left;">
                                      <input type="email" class="form-control form-control-sm" 
                                      id="total" disabled value="Rp. {{$total}}">
                                    </div>
                                </div>

                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>id barang</th>
                                            <th>nama barang</th>
                                            <th>kuantitas</th>
                                            <th>harga beli</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($detail as $item)
                                        <tr>
                                            <td>
                                                {{$item->id}}
                                            </td>
                                            <td>
                                                {{$item->item_id}}
                                            </td>
                                            <td>
                                                {{$item->nama}}
                                            </td>
                                            <td>
                                                {{$item->qty}}
                                            </td>
                                            <td>
                                                Rp. {{$item->purchasePrice}}
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


{{--
@foreach ($purchases as $purchase)
<p>{{$purchase->purchase_id}}</p>
@endforeach

--}}