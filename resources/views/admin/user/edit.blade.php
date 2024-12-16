@extends('admin.dashboard')
@section('content')
<div class="card-body">
    <div class="basic-form">
        <form action="{{ route('superadmin.user.update', $users->id) }}" method="POST">
            @csrf
            @method('PUT');
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>First Name</label>
                    <input type="text" value="{{ $users->name }}" class="form-control" placeholder="masukan nama" name="name" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="email" value="{{ $users->email }}" class="form-control" placeholder="Email" name="email" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Password</label>
                    <input type="password" value="{{ $users->password }}" class="form-control" placeholder="Password" name="password" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">submit</button>
        </form>
    </div>
</div>
@endsection