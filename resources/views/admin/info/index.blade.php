@extends('layouts.dashboard_app')
@section('title')
    Info | dashboard
@endsection
@section('Info')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item active">Info</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Info</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    @if (session('delete_info'))
                    <div class="alert alert-danger">{{ session('delete_info') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead class="thead-bordered">
                            <tr>
                                <th>No</th>
                                <th>Icon class</th>
                                <th>Info</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($infos as $info)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $info->class }}</td>
                                <td>{{ $info->info }}</td>
                                <td>
                                    <a href="{{ route('info.show', $info->id) }}" class="btn btn-info">Update</a>
                                    <form action="{{ route('info.destroy', $info->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>

                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="50">
                                     <h4 class="text-danger text-center">No data to show!@!</h4>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    @if (session('add_info'))
                    <div class="alert alert-success">{{ session('add_info') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Add Info</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('info.store') }}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Icon class</label>
                          <input type="text" class="form-control" name="class" placeholder="Enter Icon Class">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Info</label>
                          <textarea name="info" rows="4" class="form-control" placeholder="Enter Info"></textarea>
                        </div>
                        <button type="submit" class="btn btn-info">Submit</button>
                      </form>
                        </div>
                      </div>
                </div>
            </div>
        </div>

</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection