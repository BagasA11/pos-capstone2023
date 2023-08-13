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
                <form action="{{ route('user.update', $user->id) }}" 
                method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    {{-- input wrap --}}
                    <div class="row">
                        <div class="col-lg-12">
                            {{-- submit button --}}
                            <div class="form-group">
                                <button class="btn btn-primary">Update User <i class="fas fa-check"></i></button>
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
                                                    Name 
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input class="form-control" 
                                                type="text" name="name" 
                                                required value="{{ $user->name }}">
                                            </div>
                                        </div>
                                        {{-- username --}}
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="username">
                                                    username
                                                     <span class="text-danger">*</span>
                                                </label>
                                                <input 
                                                class="form-control" type="text" name="username"
                                                 required value="{{ $user->username }}"
                                                 pattern="[a-z]{3}[0-9]{3}" placeholder="abs001">
                                            </div>
                                        </div>
                                    </div>
        
                                    {{-- <div class="form-group">
                                        <label for="role">Role <span class="text-danger">*</span></label>
                                        <select class="form-control" name="role" id="role" required>
                                            @foreach(\Spatie\Permission\Models\Role::where('name', '!=', 'Super Admin')->get() as $role)
                                                <option {{ $user->hasRole($role->name) ? 'selected' : '' }} value="{{ $role->name }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div> --}}
                                    
                                    {{-- baris 2 --}}
                                    <div class="form-group">
                                        <label for="is_active">Status <span class="text-danger">*</span></label>
                                        <select class="form-control" name="is_active" id="is_active" required>
                                            <option value="1" {{ $user->is_active == 1 ? 'selected' : ''}}>Active</option>
                                            <option value="2" {{ $user->is_active == 2 ? 'selected' : ''}}>Deactive</option>
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
