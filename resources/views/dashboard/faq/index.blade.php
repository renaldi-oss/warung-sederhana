@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">FAQS</h1>

</div>

@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
@endif

<div class="table-responsive">
    <a href="/dashboard/faqs/create" class="btn btn-primary mb-3">Tambah Faqs Baru</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Pertanyaan</th>
          <th scope="col">Jawaban</th>
          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($faqs as $faq)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $faq->tanya }}</td>
            <td>{{ $faq->jawab }}</td>
            <td>
              <a href="{{ route('faqs.edit',$faq->id) }}" class="badge bg-info"><span data-feather="edit"></span></a>
              <form action="{{ route('faqs.destroy',$faq->id) }}" method="POST" class="d-inline">
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
