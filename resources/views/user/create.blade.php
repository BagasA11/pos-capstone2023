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
                <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <button class="btn btn-primary">
                                    Create User <i class="fas fa-check"></i>
                                </button>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    {{-- baris 1 --}}
                                    <div class="form-row">
                                        {{-- nama lengkap --}}
                                        <div class="col-lg-6">
                                            
                                            <div class="form-group">
                                                <label for="name">
                                                    Name <span class="text-danger">*</span>
                                                </label>
                                                <input class="form-control" 
                                                type="text" name="name" required>
                                            </div>
                                        </div>
                                        {{-- username --}}
                                        <div class="col-lg-6">

                                            <div class="form-group">
                                                <label for="username">
                                                    username 
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input class="form-control" 
                                                type="text" name="username" 
                                                required pattern="[a-z]{3}[0-9]{3}" 
                                                placeholder="abc123">
                                            </div>

                                        </div>
                                    </div>

                                    {{-- baris 2 --}}
                                    <div class="form-row">
                                        {{-- Password --}}
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="password">
                                                    Password 
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input class="form-control" 
                                                type="password" name="password" 
                                                required>
                                            </div>
                                        </div>
                                        {{-- password_confirmation --}}
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="password_confirmation">
                                                    Confirm Password 
                                                    <span class="text-danger">*</span>
                                                </label>
                                                
                                                <input class="form-control" type="password" name="password_confirmation"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="form-group">
                                <label for="role">Role <span class="text-danger">*</span></label>
                                <select class="form-control" name="role" id="role" required>
                                    <option value="" selected disabled>Select Role</option>
                                    @foreach (\Spatie\Permission\Models\Role::where('name', '!=', 'Super Admin')->get() as $role)
                                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div> --}}

                                    <div class="form-group">
                                        <label for="is_active">Status 
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-control" name="is_active" id="is_active" required>
                                            <option value="" selected disabled>Select Status</option>
                                            <option value="1">Active</option>
                                            <option value="2">Deactive</option>
                                        </select>
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
