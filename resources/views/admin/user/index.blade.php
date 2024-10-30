@extends('admin.dashboard')
@section('content')
<div class="card-body">
    <a class="btn btn-info" href="{{ route('superadmin.user.create') }}">CREATE USER <span class="btn-icon-right"><i class="fa fa-plus"></i></span>
    </a>>
    <div class="table-responsive" style="margin-top: 10px">
        <table class="table table-bordered verticle-middle table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Akun</th>  
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td>{{ $user->role }}</td>
                    <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i> </a><a href="javascript:void()" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection