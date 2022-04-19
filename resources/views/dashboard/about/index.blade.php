@extends('dashboard.layouts.main')

@section('container')

    
<div class="d-flex justify-content-start flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">About</h1>
  {{-- <a href="{{ route('about.update',$about->id) }}" class="badge bg-warning ms-3"><span data-feather="edit"></span></a> --}}
</div>
@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
    @endif
<div class="col-lg-8">
  <form method="post" action="/dashboard/about/{{ $about->id }}" enctype="multipart/form-data">
    @method('patch')
    @csrf
    
    <div class="mb-3">
      <h4>deskripsi</h4>
      <input id="body" type="hidden" name="body" class=" @error('body') is-invalid @enderror" value="{{ old('body',$about->body) }}">
      <trix-editor input="body"></trix-editor> 
      @error('body')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror 
    </div>
    <div class="mb-3">
        <h4>Detail</h4>
        <input id="body2" type="hidden" name="body2" class=" @error('body2') is-invalid @enderror" value="{{ old('body2',$about->body2) }}">
        <trix-editor input="body2"></trix-editor> 
        @error('body2')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
      @enderror 
    </div>
    <div class="mb-3">
      <label for="img" class="form-label mt-2 mb-2 d-block">Gambar</label>
      @if ($about->image)
      
      <img src="{{ asset('storage/') . $about->image }}" alt="">

      @else
      
      <img class="img-preview img-fluid mb-3 col-sm-3">
      
      @endif
      <input class="form-control" type="file" id="image" name="image" onchange="previewimage()">
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    @endsection