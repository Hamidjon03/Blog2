@extends('admin.layouts.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Create Users</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Users</a></li>
                            <li class="breadcrumb-item active">Create User</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.user.store') }}" method="POST" class="w-50">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="User Name">
                                @error('name')
                                <div class="text-danger">  {{ $message  }} </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                                @error('email')
                                <div class="text-danger">  {{ $message  }} </div>
                                @enderror
                            </div>


                            <div class="form-group w-50">
                                <label>Select Role</label>

                                <select name="role" class="form-control">
                                    @foreach($roles as $id => $role)
                                        <option value="{{ $id }}"
                                            {{ $id == old('role_id') ? ' selected' : '' }}
                                        >{{ $role }}</option>
                                    @endforeach
                                </select>

                                @error('role')
                                <div class="text-danger">  {{ $message  }} </div>
                                @enderror
                            </div>

                            <input type="submit" class="btn btn-primary" value="Create User">
                        </form>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
