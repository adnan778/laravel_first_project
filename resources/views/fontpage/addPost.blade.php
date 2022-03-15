@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-10">
        <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Blog Posts</span>
                <h3 class="page-title">Add New Post</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <div class="row">
              <div class="col-lg-9 col-md-12">
                <!-- Add New Post Form -->
                <div class="card card-small mb-3">
                  <div class="card-body">
                    <form method="post" action="{{ route('insert.blog') }}">
                      @csrf
                      <input class="form-control form-control-lg mb-3" name="title" type="text" placeholder="Your Post Title">
                      <textarea class="form-control form-control-lg mb-3" name="dec" placeholder="Write Description" cols="30" rows="10"></textarea>
                      <button type="submit" class="btn btn-info btn-sm">Post Submit</button>
                    </form>
                  </div>
                </div>
                <!-- / Add New Post Form -->
              </div>
              <div class="col-lg-3 col-md-12"></div>
</div>
</div>
             

@endsection