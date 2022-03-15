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
                <span class="text-uppercase page-subtitle">Components</span>
                <h3 class="page-title">Blog Posts</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <div class="row">
              @foreach($data as $info)
              <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card card-small card-post card-post--1">
                  <div class="card-post__image" style="min-height: 0.3125rem;">
                    <div class="card-post__author d-flex">
                      <img src="/{{Auth::user()->image}}" class="card-post__author-avatar card-post__author-avatar--small"  alt="">
                      <!-- <a href="#" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('{{Auth::user()->image}}');">Written by Anna Kunis</a> -->
                    </div>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">
                      <a class="text-fiord-blue" href="#">{{$info->title}}</a>
                    </h5>
                    <p class="card-text d-inline-block mb-3">{{$info->dec}}</p>
                    <span class="text-muted">{{$info->created_at}}</span>
                  </div>
                </div>
              </div>
@endforeach
</div> 
</div> 
</div>
</div>

        
  @endsection