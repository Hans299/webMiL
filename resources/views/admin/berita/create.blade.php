@extends('admin.dashboard')
@section('content')
<div class="compose-content">
    @csrf
    <form action="#">
        <div class="form-group">
            <input type="text" class="form-control bg-transparent" placeholder=" Judul">
        </div>
        <div class="form-group">
            <textarea id="email-compose-editor" class="textarea_editor form-control bg-transparent" rows="15" placeholder="Enter text ..."></textarea>
        </div>
    </form>
    <h5 class="mb-4"><i class="fa fa-paperclip"></i> Attatchment</h5>
    <form action="#" class="d-flex flex-column align-items-center justify-content-center">
        <div class="fallback w-100">
            <input type="file" class="dropify" data-default-file="">
        </div>
    </form>
</div>
@endsection