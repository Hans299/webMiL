@extends('admin.dashboard')
@section('content')
<div class="card-body">
    <div class="basic-form">
        <form action="{{ route('superadmin.user.store') }}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>First Name</label>
                    <input type="text" class="form-control" placeholder="masukan nama" name="name">
                </div>
                <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Email" name="email">
                </div>
                <div class="form-group col-md-6">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">submit</button>
        </form>
    </div>
</div>
@endsection