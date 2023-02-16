@extends('layouts.master')

@section('content')
  <main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Main</a></li>
        </ol>

        
        <div class="row">
          <div class="form-group col-md-3 mt-3">
            <h3>Background Image</h3>
            <img style="height: 30vh" class="img-thumbnail" src="{{url($main->bg_img)}}" alt="background-image">
          <input class="mt-3" type="file" id="bg-img" name="bg-img">
          </div>
          <div class="form-group col-md-4 mt-3">
            <div>
              <label for="title"><H4>Title</H4></label>
              <input type="text" class="form-control" id="title" name="title" value="{{$main->title}}">
            </div>
            <div class="mt-2 mb-4">
              <label for="sub_title"><H4>Sub Title</H4></label>
              <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{$main->sub_title}}">
            </div>
            <div class="mt-2">
              <H4>Upload Resume</H4>
              <input type="file" id="resume" name="resume" value="{{url($main->resume)}}">
            </div>
          </div>
        </div>
    </div>
  </main>

@endsection  