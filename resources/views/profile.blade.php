@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
  <div class="col-lg-2"></div>
  <div class="col-lg-10">
    @if(Session::has('success'))
          <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                      <i class="fa fa-check mx-2"></i>
                      <strong>Success!</strong>{{ Session::get('success') }}
                    
          </div>
          @endif
        
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">User Profile</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                    <div class="mb-3 mx-auto">
                      <img id="picture" class="rounded-circle" src="/{{$users->image}}" alt="User Avatar" width="110"> </div>
                    <h4 class="mb-0">{{$users->name}}</h4>
                 
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item px-4" style="margin: auto;">
                      <div class="progress-wrapper mb-3 mx-auto">
                        <a class="btn btn-info btn-sm prifile " href="{{route('changeProfilePicture')}}">Change Profile Picture</a>
                      
                      </div>
                    </li>
                   
                  </ul>
                </div>
              </div>

              <div class="col-lg-8 Details">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Account Details</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                        <form method="POST" action="{{ route('updateAcount') }}" enctype="multipart/form-data">
                           @csrf
                            <div class="form-row">
                              <div class="form-group col-lg-6">
                                <label for="feFirstName">Name</label>
                                <input type="text" class="form-control" name="name" id="feFirstName" placeholder="Name" value="{{$users->name}}"> </div>
                              <div class="form-group col-lg-6">
                                <label for="feLastName">Email</label>
                                <input type="email" class="form-control" name="email" id="feLastName" placeholder="Email" value="{{$users->email}}"> </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-lg-6">
                                <label for="feEmailAddress">Phone</label>
                                <input type="number" class="form-control" name="phone" id="feEmailAddress" placeholder="Phone" value="{{$users->phone}}"> </div>
                              <div class="form-group col-lg-6">
                               
                              <label for="feInputState">Gander</label>
                                <select id="feInputState" value="{{$users->gander}}" name="gander" class="form-control">
                                <option>Male</option>
                                <option>Female</option>
                                <option>Third Gander</option>
                                <option>Costom</option>
                                </select>
                              </div>
                            </div>
               
                            <div class="form-row">
                            <div class="form-group col-lg-6">
                              
                            <label for="feInputAddress">Date Of Birth</label>
                              <input type="date" class="form-control" name="date" id="feInputAddress" value="{{$users->date}}" placeholder="{{$users->date}}">
                              
                              </div>
                              <div class="form-group col-lg-6">
                              
                             </div>
                     
                                    </div>

                                    <div class="form-row">

                                    <button type="submit" class="btn btn-accent">Update Account</button> 
                                    </div>
                        
          </div>
        </main>
      </div>
    </div>
    <div class="promo-popup animated">
      <a href="http://bit.ly/shards-dashboard-pro" class="pp-cta extra-action">
        <img src="https://dgc2qnsehk7ta.cloudfront.net/uploads/sd-blog-promo-2.jpg"> </a>
      <div class="pp-intro-bar"> Need More Templates?
        <span class="close">
          <i class="material-icons">close</i>
        </span>
        <span class="up">
          <i class="material-icons">keyboard_arrow_up</i>
        </span>
      </div>
      <div class="pp-inner-content">
        <h2>Shards Dashboard Pro</h2>
        <p>A premium & modern Bootstrap 4 admin dashboard template pack.</p>
        <a class="pp-cta extra-action" href="http://bit.ly/shards-dashboard-pro">Download</a>
      </div>
    </div>
    </div>
</div>

</div>
<script>
    $('#picture').faceDetection({
        complete: function (faces) {
            console.log(faces);
        }
    });
</script>


@endsection
