{{-- user --}}
@extends('layouts.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Riwayat Pembelian</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="#">
                                    Riwayat Pembelian
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
                                <a href="#" class="btn btn-primary">Add User <i
                                        class="fas fa-plus"></i></a>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id beli</th>
                                            <th>username karyawan</th>
                                            <th>nama PT</th>
                                            
                                            <th>created_at</th>
                                            <th>updated_at</th>
                                            <th>lihat detil</th>
                                            <th>hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($purchases as $purchase)
                                            <tr>
                                                </td>
                                                <td>{{ $purchase->purchase_id  }}</td>
                                                <td>{{ $purchase->username }}</td>
                                                <td>{{ $purchase->namaPT }}</td>
                                                <td>{{ $purchase->created_at }}</td>
                                                <td>{{ $purchase->updated_at }}</td>
                                                <td><a href="{{route('purchase.detail', $purchase->purchase_id)}}">
                                                    lihat detil
                                                    </a>
                                                </td>
                                                <td>
                                                    {{-- 
                                                        <div class="d-flex">
                                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('user.destroy', $users->id) }}" method="POST">
                                                        <a class="btn btn-primary shadow btn-xs sharp me-1 edit_user"
                                                            href="{{route('user.edit', $users->id)}}"><i
                                                                class="fas fa-pencil-alt"></i></a>
                                                                @csrf
                                                                @method('DELETE')
                                                            <button type="submit" class="btn btn-danger shadow btn-xs sharp delete_user"><i class="fa fa-trash"></i></button>
                                                        </form>
                                                    </div>
                                                    --}}
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