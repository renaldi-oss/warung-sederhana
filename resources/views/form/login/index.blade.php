
@extends('form.layout.formMain')

@section('form')

{{-- digunakan ketika success registrasi yang disimpan didalam session --}}
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

{{-- digunakan ketika attempt login gagal --}}
@if(session()->has('LoginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{ session('LoginError') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


<form action="/login" method="post">
    @csrf

    <div class="form-floating">
      <input type="text" name="email" class="form-control rounded @error('email') is-invalid @enderror" id="email" placeholder="Aldi@gmail.com" autofocus required value={{ old('email') }}>
      <label for="email">Email</label>
      @error('email')
          <div class="invalid-feedback mb-1">
              {{ $message }}
          </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control rounded @error('password') is-invalid @enderror" id="Password" placeholder="*******" required>
      <label for="Password">Password</label>
      @error('password')
          <div class="invalid-feedback mb-1">
              {{ $message }}
          </div>
      @enderror
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
</form>
@endsection



@section('lokasi')
<small class="d-block mt-3 text-center">belum register? <a href="/register">pencet disini</a></small>
@endsection