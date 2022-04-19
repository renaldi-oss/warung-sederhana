@extends('dashboard.layouts.main')

@section('container')

    
<div class="d-flex justify-content-start flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Jumbotron</h1>
</div>
@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
    @endif
<div class="col-lg-8">
  <form method="post" action="/dashboard/jumbotron/{{ $jumbo->id }}" enctype="multipart/form-data">
    @method('patch')
    @csrf
    
    <div class="mb-3">
      <h4>title</h4>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus
          value="{{ old('name',$jumbo->title)  }}">
      @error('body')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror 
    </div>
    <div class="mb-3">
      <h4>slogan1</h4>
      <input type="text" class="form-control @error('slogan1') is-invalid @enderror" id="slogan1" name="slogan1" required autofocus
          value="{{ old('name',$jumbo->slogan1)  }}">
      @error('body')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror 
    </div>
    <div class="mb-3">
      <h4>slogan2</h4>
      <input type="text" class="form-control @error('slogan2') is-invalid @enderror" id="slogan2" name="slogan2" required autofocus
          value="{{ old('name',$jumbo->slogan2)  }}">
      @error('body')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror 
    </div>
    
    </div>
    <div class="mb-3">
      <label for="img" class="form-label mb-2 d-block">Gambar Menu</label>
      @if ($jumbo->image)
      
      <img src="{{ asset('storage/') . $jumbo->image }}" alt="">

      @else
      
      <img class="img-preview img-fluid mb-3 col-sm-3">
      
      @endif
      <input class="form-control" type="file" id="image" name="image" onchange="previewimage()">
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    @endsection