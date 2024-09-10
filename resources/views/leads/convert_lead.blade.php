@extends('main')
@section('dynamic_page')
<div class="content-wrapper"> 
    <div class="content-header sty-one">
      <h1>Convert Lead</h1>
      <ol class="breadcrumb">
        <li><a href="{{route('home')}}">Home</a></li>
        <li><i class="fa fa-angle-right"></i>Convert Lead</li>
      </ol>
    </div>
    
    <div class="content">
      <div class="row">
        <div class="col-lg-12">
          <div class="info-box">
            <div class="card tab-style1"> 
                <ul class="nav nav-tabs profile-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">
                        Convert Lead - {{ $lead_details->firstname }} {{ $lead_details->lastname }} | {{ $lead_details->company }}</a> </li>
                </ul>
                <form 
                action="{{url('/leads/convert-lead/' .$lead_details->id)}}" 
                method="post">
                @csrf
                    <div class="tab-content">
                        <div class="tab-pane active" id="profile" role="tabpanel" aria-expanded="false">
                            <div class="card-body">
                                <h6 class="font-medium m-t-3">Create New Account 
                                    <span class="badge badge-primary">{{ $lead_details->company }}</span>
                                </h6>
                                <h6 class="font-medium m-t-3">Create New Contact
                                    <span class="badge badge-primary">{{ $lead_details->firstname }} {{ $lead_details->lastname }}</span>
                                </h6>
                                <hr>
                                <h6 class="font-medium m-t-3">
                                    Create New Deal for this account
                                </h6>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <label class="control-label">Amount <span class="text-danger">*</span></label>
                                            <input class="form-control" placeholder="Amount" type="text" 
                                            name="amount" >
                                            <span class="fa fa-user form-control-feedback" aria-hidden="true"></span> 
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <label class="control-label">Deal Name <span class="text-danger">*</span></label>
                                            <input class="form-control" placeholder="Deal Name" type="text" name="deal_name" >
                                            <span class="fa fa-user form-control-feedback" aria-hidden="true"></span> 
                                        </div>
                                        @error('deal_name')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <label class="control-label">Closing Date <span class="text-danger">*</span></label>
                                            <input class="form-control" placeholder="Closing Date" type="date" name="closing_date" >
                                        </div>
                                        @error('closing_date')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    @php
                                        $lead_status = 
                                            array('Qualifications', 'Needs Analysis', 'Direct Call', 'Proposal/Price', 'Quote','Negotiation','Closed Won','Closed Lost');
                                    @endphp
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label">Stage</label>
                                            <div class="col-md-12">
                                                <select class="form-control custom-select" placeholder="Stage" name="deal_stage">
                                                    <option value="">Stage</option>
                                                    @foreach($lead_status as $leadStatus)
                                                        @if($leadStatus == $lead_details['status'])
                                                            <option value="{{ $leadStatus}}" selected>{{ $leadStatus}}</option>
                                                        @else
                                                            <option value="{{ $leadStatus}}">{{ $leadStatus}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        @error('deal_stage')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                </div>
                                <div>
                                    <button type="submit" class="btn btn-outline-primary" name="submit" value="submit">Convert</button>
                                    <a href="{{url('/leads/manage-leads')}}" class="btn btn-outline-secondary">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection