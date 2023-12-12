@extends('layouts.app')
@section('content')

<!-- Page content -->
<div class="content">
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">USER</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                    {{-- <a href="{{ route('posts.create') }}" class="btn btn-md btn-primary mb-3">TAMBAH USER</a> --}}
                    <form method="GET" action="{{ route('users.index') }}">
                        <div class="form-row align-items-center">
                            <div class="col">
                                <input type="search" name="search" class="form-control mb-2" id="inlineFormInput"
                                    placeholder="Type here to search">
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary mb-2 float-left">Search</button>
                            </div>
                            <div class="col">
                                <a href="{{ route('users.create') }}" class="btn btn-primary mb-2 float-right">Tambah User</a>
                            </div>
                        </div>
                    </form>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{!! $user->email !!}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('users.destroy', $user->id) }}" method="POST">
                                        <a href="{{ route('users.edit',$user->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-danger">
                            Data User belum Tersedia.
                            </div>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

@endsection



