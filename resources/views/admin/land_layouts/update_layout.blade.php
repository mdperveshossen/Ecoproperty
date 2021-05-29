@extends('layouts.dashboard_app')
@section('title')
    Update | land | layouts | dashboard
@endsection
@section('layout')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('layout.index') }}">land layouts</a>
        <a class="breadcrumb-item active">Update land layouts</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update | land | layouts</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    @if (session('update_layout'))
                    <div class="alert alert-success">{{ session('update_layout') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update layout</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('layout.update.post', $info->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Floor</label>
                          <input type="text" class="form-control" name="floor_name" value="{{ $info->floor_name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea class="form-control" name="description" rows="4" >{{ $info->description }}</textarea>
                          </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Total Area</label>
                          <input type="text" class="form-control" name="total_area" value="{{ $info->total_area }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Total Room</label>
                          <input type="text" class="form-control" name="room" value="{{ $info->room }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Total Bed</label>
                          <input type="text" class="form-control" name="bed" value="{{ $info->bed }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Total Bath</label>
                          <input type="text" class="form-control" name="bath" value="{{ $info->bath }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Photo</label>
                          <input type="file" class="form-control" name="photo">
                        </div>
                        <img style="height: 20px; width: 30px;" src="{{ asset('uploads/layout_photo') }}/{{ $info->photo }}" alt="">
                        <br>
                        <br>
                        <button type="submit" class="btn btn-warning">Submit</button>
                      </form>
                        </div>
                      </div>
                </div>
            </div>
        </div>

</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection