@extends('layouts.main')
@section('content')

<body style="background: lightgray">
  <!-- Page content -->
  <div class="tampil">
    <div class="container">
        <div>
            <h3 class="text-center my-4">HALAMAN USER</h3>
            <hr>
        </div>
        <div class="row">
            <form action="/tampil/search" method="GET">
                <div class="row mb-3">
                    <label for="search" class="col-sm-2 col-form-label btn btn-success">Cari data</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-sm" value="" placeholder="Search data...."
                        name="search" autofocus value="{{ old('search') }}">
                    </div>
                </div>
            </form>
        </div>
        <div class="card border-0 shadow-sm rounded">
            <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">GAMBAR</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">CONTENT</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($posts as $post)
                    <tr>
                        <td class="text-center">
                            <img src="{{
                            asset('/storage/posts/'.$post->image) }}" class="rounded" style="width:
                            150px">
                        </td>
                        <td>{{ $post->title }}</td>
                        <td>{!! $post->content !!}</td>
                    </tr>
                @empty
                    <div class="alert alert-danger">
                    Data Post belum Tersedia.
                    </div>
                @endforelse
                </tbody>
            </table>
        {{ $posts->links() }}
        </div>
    </div>
    </div>
</div>
</div>
</body>
</html>
@endsection



