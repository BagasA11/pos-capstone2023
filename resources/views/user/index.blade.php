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
        <!-- /.content-header -->

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('user.create') }}" class="btn btn-primary">Add User <i
                                        class="fas fa-plus"></i></a>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Username</th>

                                            <th>Status</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($userTable as $users)
                                            <tr>
                                                </td>
                                                <td>{{ $users->name }}</td>
                                                <td>{{ $users->username }}</td>

                                                <td><?php
                                                    if ($users->is_active == 1) {
                                                            echo '<td><span class="badge badge-success">Active</span></td>';
                                                        } else {
                                                            echo '<td><span class="badge badge-warning">Deactivated</span></td>';
                                                        }
                                                    ?></td>

                                                <td>
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
