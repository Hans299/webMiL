@extends('admin.dashboard')
@section('content')
<div class="card-body">
    <div class="basic-form">

        {{-- Tampilkan pesan error global jika ada validasi yang gagal --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    {{-- Loop untuk menampilkan semua pesan error --}}
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Form untuk update data pengguna --}}
        <form action="{{ route('superadmin.user.update', $users->id) }}" method="POST">
            @csrf {{-- Token keamanan CSRF --}}
            @method('PUT') {{-- Metode PUT untuk update data --}}

            <div class="form-row">
                {{-- Input untuk nama pengguna --}}
                <div class="form-group col-md-6">
                    <label for="name">First Name</label>
                    <input 
                        type="text" 
                        value="{{ old('name', $users->name) }}" {{-- Tampilkan nilai lama atau nilai dari database --}}
                        class="form-control @error('name') is-invalid @enderror" {{-- Tambahkan class error jika validasi gagal --}}
                        placeholder="Masukan nama" 
                        name="name" 
                        required>
                    {{-- Tampilkan pesan error spesifik untuk field 'name' --}}
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Input untuk email pengguna --}}
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input 
                        type="email" 
                        value="{{ old('email', $users->email) }}" {{-- Tampilkan nilai lama atau nilai dari database --}}
                        class="form-control @error('email') is-invalid @enderror" {{-- Tambahkan class error jika validasi gagal --}}
                        placeholder="Email" 
                        name="email" 
                        required>
                    {{-- Tampilkan pesan error spesifik untuk field 'email' --}}
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Input untuk password baru --}}
                <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <input 
                        type="password" 
                        class="form-control @error('password') is-invalid @enderror" {{-- Tambahkan class error jika validasi gagal --}}
                        placeholder="Password (Opsional)" {{-- Teks placeholder untuk membantu pengguna --}}
                        name="password">
                    {{-- Tampilkan pesan error spesifik untuk field 'password' --}}
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            {{-- Tombol submit untuk menyimpan perubahan --}}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
