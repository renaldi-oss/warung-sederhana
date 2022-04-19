@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Menu</h1>
</div>
<div class="col-lg-8">
    <form method="POST" action="/dashboard/faqs" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
          <label for="" class="mb-2">Tanya</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="namaMakanan" name="tanya" 
          required autofocus value="{{ old('tanya') }}">
          @error('tanya')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror   
        </div>
        <div class="form-group">
          <label for="" class="mb-2">Jawab</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="namaMakanan" name="jawab" 
          required autofocus value="{{ old('jawab') }}">
          @error('jawab')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror   
        </div>
        
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
      </form>
</div>
@endsection