@extends('layouts.dashboard_app')
@section('title')
    Update | Nav Items | Dashboard
@endsection
@section('navbar')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('navbar') }}">Nav Items</a>
        <a class="breadcrumb-item active">Update Nav Items</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update | Nav Items</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 m-auto">
                    @if (session('update_nav'))
                    <div class="alert alert-success">{{ session('update_nav') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update Navbar</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('navbarupdatepost', $info->id) }}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nav item</label>
                          <input type="text" class="form-control" name="nav_item" value="{{ $info->nav_item }}">
                        </div>
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