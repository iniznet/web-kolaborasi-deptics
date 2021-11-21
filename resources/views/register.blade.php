@extends('templates.base')

@section('title', 'Socialchat | Register')

@section('content')
<div class="container">
    <div class="mt-3">
        <form action="{{ url('/prosesregister') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('username') }}">
                @error('username')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" value="{{ old('password') }}">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Konfirmasi Password</label>
                <input type="password" name="konf_password" id="password" class="form-control @error('konf_password') is-invalid @enderror" id="exampleInputPassword1" value="{{ old('konf_password') }}">
                @error('konf_password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
        </form>
    </div>
</div>
@endsection

@section('javascript')
    <script type="text/javascript">
        console.log('ini dari halaman login')
    </script>
@endsection
