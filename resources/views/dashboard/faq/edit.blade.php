@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Menu</h1>
</div>
<div class="col-lg-8">
    <form method="POST" action="/dashboard/faqs/{{ $faq->id }}" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="form-group">
          <label for="">Tanya</label>
          <input type="text" class="form-control mb-3 @error('name') is-invalid @enderror" id="namaMakanan" name="tanya" required autofocus
          value="{{ old('tanya',$faq->tanya)  }}">
          @error('name')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror   
        </div>
        <div class="form-group">
          <label for="">Jawaban</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="namaMakanan" name="jawab" required autofocus
          value="{{ old('jawab',$faq->jawab)  }}">
          @error('name')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror   
        </div>
        
        <button type="submit" class="btn btn-primary mt-3">Update Menu</button>
      </form>
</div>
@endsection