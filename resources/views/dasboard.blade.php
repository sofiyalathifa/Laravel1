@extends('layouts.app')
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<h2>Welcome,To Blog Any Trip {{(Auth::user())->name }}</h2>

@endsection

