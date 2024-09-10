@extends('main')
@section('dynamic_page')
<div class="content-wrapper"> 
    <div class="content-header sty-one">
      <h1>View Lead</h1>
      <ol class="breadcrumb">
        <li><a href="{{route('home')}}">Home</a></li>
        <li><i class="fa fa-angle-right"></i>View Lead</li>
      </ol>
    </div>
    
    <div class="content">
      <div class="row">
        <div class="col-lg-12">
          <div class="info-box">
            <div class="card tab-style1"> 
              <ul class="nav nav-tabs profile-tab" role="tablist">
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">View Lead</a> </li>
              </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="profile" role="tabpanel" aria-expanded="false">
                <div class="card-body">
                    <div class="row">
                    <div class="col-lg-3 col-xs-6 b-r"> <strong>Full Name</strong> <br>
                        <p class="text-muted">{{ $lead_details->firstname }}</p>
                    </div>
                    <div class="col-lg-3 col-xs-6 b-r"> <strong>Last Name</strong> <br>
                        <p class="text-muted">{{ $lead_details->lastname }}</p>
                    </div>
                    <div class="col-lg-3 col-xs-6 b-r"> <strong>Title</strong> <br>
                        <p class="text-muted">{{ $lead_details->title }}</p>
                    </div>
                    <div class="col-lg-3 col-xs-6 b-r"> <strong>Email</strong> <br>
                        <p class="text-muted">{{ $lead_details->email }}</p>
                    </div>
                    </div>
                    <hr>
                    <div class="row pt-4">
                        <div class="col-lg-3 col-xs-6 b-r"> <strong>Phone</strong> <br>
                            <p class="text-muted">{{ $lead_details->phone }}</p>
                        </div>
                        <div class="col-lg-3 col-xs-6 b-r"> <strong>Lead Status</strong> <br>
                            <p class="text-muted">{{ $lead_details->status }}</p>
                        </div>
                        <div class="col-lg-3 col-xs-6 b-r"> <strong>Lead Source</strong> <br>
                            <p class="text-muted">{{ $lead_details->source }}</p>
                        </div>
                    </div>
                    <hr>
                    <h4 class="font-medium m-t-3">Address Information</h4>
                    <hr>
                    <div class="row pt-4">
                        <div class="col-lg-3 col-xs-6 b-r"> <strong>Street</strong> <br>
                            <p class="text-muted">{{ $lead_details->street }}</p>
                        </div>
                        <div class="col-lg-3 col-xs-6 b-r"> <strong>City</strong> <br>
                            <p class="text-muted">{{ $lead_details->city }}</p>
                        </div>
                        <div class="col-lg-3 col-xs-6 b-r"> <strong>Zip Code</strong> <br>
                            <p class="text-muted">{{ $lead_details->zip }}</p>
                        </div>
                        <div class="col-lg-3 col-xs-6 b-r"> <strong>Country</strong> <br>
                            <p class="text-muted">{{ $lead_details->country }}</p>
                        </div>
                    </div>
                    <h4 class="font-medium m-t-3">Description Information</h4>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6 col-xs-6 b-r"> <strong>Description</strong> <br>
                            <p class="text-muted">{{ $lead_details->description }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6 col-xs-6 b-r">
                        <a href="{{url('/leads/convert-lead/' .$lead_details->id)}}" class="btn btn-outline-primary">Convert</abs>
                            <a href="{{url('/leads/edit-lead/' .$lead_details->id)}}" class="btn btn-outline-primary">Edit</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection