@extends('layouts.master')

@section('content')
  <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Main</a></li>
        </ol>
      <H1>Hello I am Md Mahmudul Hasan</H1>
    </div>
  </main>

@endsection  