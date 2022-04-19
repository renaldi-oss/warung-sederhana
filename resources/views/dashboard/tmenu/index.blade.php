@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Menu</h1>

</div>

@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
@endif

<div class="table-responsive">
    <a href="/dashboard/menus/create" class="btn btn-primary mb-3">Tambah Menu Baru</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Kategori</th>
          <th scope="col">Nama Menu</th>
          <th scope="col">Harga</th>
          {{-- <th scope="col">photo</th> --}}
          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($menus as $menu)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $menu->category->name }}</td>
            <td>{{ $menu->name }}</td>
            <td>{{ $menu->price }}</td>
            <td>
              <a href="{{ route('menus.edit',$menu->id) }}" class="badge bg-info"><span data-feather="edit"></span></a>
              <form action="{{ route('menus.destroy',$menu->id) }}" method="POST" class="d-inline">
                @method('DELETE')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('apakah anda yakin ?')"><span data-feather="x"></span></button>
              </form>
            </td>
          </tr>
        @endforeach
        
      </tbody>
    </table>
  </div>
@endsection
