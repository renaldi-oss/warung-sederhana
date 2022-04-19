@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Menu</h1>
</div>
<div class="col-lg-8">
    <form method="POST" action="/dashboard/menus/{{ $menu->id }}" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="form-group">
          <label for="">Nama Makanan</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="namaMakanan" name="name" required autofocus
          value="{{ old('name',$menu->name)  }}">
          @error('name')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror   
        </div>
        <div class="form-group">
          <label for="category">kategori</label>
          <select class="form-select " name="category_id">
            @foreach ($categories as $category)
                @if (old('category_id',$menu->category_id) == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
            @endforeach
            
          </select>
        </div>
        <div class="form-group mb-3">
          <label for="price">Harga</label>
          <input type="text" class="form-control  @error('price') is-invalid @enderror" id="price" name="price" required value="{{ old('price',$menu->price) }}">   
        </div>
        <div class="mb-3">
          <label for="img" class="form-label mb-2 d-block">Gambar Menu</label>
          @if ($menu->image)
          
          <img src="{{ asset('storage/') . $menu->image }}" alt="">

          @else
          
          <img class="img-preview img-fluid mb-3 col-sm-3">
          
          @endif
          <input class="form-control" type="file" id="image" name="image" onchange="previewimage()">
        </div>
        <button type="submit" class="btn btn-primary">Update Menu</button>
      </form>
</div>
@endsection