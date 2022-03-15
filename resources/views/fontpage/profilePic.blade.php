@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-4"></div>
              <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                    <div class="mb-3 mx-auto">
                      <img class="rounded-circle" src="/{{$users->image}}" alt="User Avatar" width="110"> </div>
                    <h4 class="mb-0">{{$users->name}}</h4>
                    <br><br>
                    <span class="text-muted d-block mb-2">  
                        
                    <form method="POST" action="{{ route('updateimage') }}" enctype="multipart/form-data">
                           @csrf
                        <input type="file" name="image">
                        <button type="submit" class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2">
                         Change Image
                    
                  
                    </button>
                        </form></span>
                  
                  </div>
              
                </div>
              </div>

<div class="col-lg-4"></div>


</div>
@endsection