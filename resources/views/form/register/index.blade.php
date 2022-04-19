@extends('form.layout.formMain')

@section('form')

<form action="/register" method="POST">
    @csrf

    <div class="form-floating">
        <input type="text" name="name" class="form-control rounded mb-1 @error('name') is-invalid @enderror" id="name" placeholder="Aldi" required value="{{ old('name') }}">
        <label for="name">Name</label>
        @error('name')
        <div class="invalid-feedback mb-1">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating">
        <input type="text" name="username" class="form-control rounded mb-1 @error('username') is-invalid @enderror" id="username" placeholder="Aldi" required value="{{ old('username') }}">
        <label for="username">Username</label>
        @error('username')
        <div class="invalid-feedback mb-1">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating">
        <input type="email" name="email" class="form-control rounded mb-1 @error('email') is-invalid @enderror" id="email" placeholder="Aldi@gmail.com" required value="{{ old('email') }}">
        <label for="email">Email</label>
        @error('email')
        <div class="invalid-feedback mb-1">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-floating">
        <input type="password" name="password" class="form-control rounded @error('password') is-invalid @enderror" id="Password" placeholder="*******" required>
        <label for="password">Password</label>
        @error('password')
        <div class="invalid-feedback mb-2">
            {{ $message }}
        </div>
        @enderror
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
</form>
@endsection

@section('lokasi')
<small class="d-block mt-3 text-center">sudah register? <a href="/login">pencet disini</a></small>
@endsection