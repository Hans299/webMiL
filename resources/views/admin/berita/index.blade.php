@extends('admin.dashboard')
@section('content')
<div class="card-body">
    <a class="btn btn-info" href="{{ route('berita.create') }}">CREATE BERITA <span class="btn-icon-right"><i class="fa fa-plus"></i></span>
    </a>>
    <div class="table-responsive" style="margin-top: 10px">
        <table class="table table-bordered verticle-middle table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>  
                    <th scope="col">ISI</th>
                    <th scope="col">GAMBAR</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
@endsection