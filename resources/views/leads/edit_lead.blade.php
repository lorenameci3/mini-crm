@extends('main')
@section('dynamic_page')
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Edit Lead</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><i class="fa fa-angle-right"></i> Edit Lead</li>
        </ol>
    </div>
    <div class="content">
        <div class="row m-t-3">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header bg-blue">
                        <h5 class="text-white m-b-0">Edit Lead</h5>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">First Name <span class="text-danger">*</span></label>
                                        <input class="form-control" placeholder="First Name" type="text" name="firstname" value="{{ $lead_details->firstname }}">
                                        <span class="fa fa-user form-control-feedback" aria-hidden="true"></span> 
                                    </div>
                                    @error('firstname')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Last Name <span class="text-danger">*</span></label>
                                        <input class="form-control" placeholder="Last Name" type="text" name="lastname" value="{{ $lead_details->lastname }}">
                                        <span class="fa fa-user form-control-feedback" aria-hidden="true"></span> 
                                    </div>
                                    @error('lastname')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Title <span class="text-danger">*</span></label>
                                        <input class="form-control" placeholder="Title" type="text" name="title" value="{{ $lead_details->title }}">
                                        <span class="fa fa-briefcase form-control-feedback" aria-hidden="true"></span> 
                                    </div>
                                    @error('title')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Company <span class="text-danger">*</span></label>
                                        <input class="form-control" placeholder="Company" type="text" name="company" value="{{ $lead_details->company }}">
                                        <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span> 
                                    </div>
                                    @error('company')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">E-mail <span class="text-danger">*</span></label>
                                        <input class="form-control" placeholder="E-mail" type="text" name="email" value="{{ $lead_details->email }}">
                                        <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span> 
                                    </div>
                                    @error('email')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Contact Number <span class="text-danger">*</span></label>
                                        <input class="form-control" placeholder="Contact Number" type="text" name="phone" value="{{ $lead_details->phone }}">
                                        <span class="fa fa-phone form-control-feedback" aria-hidden="true"></span> 
                                    </div>
                                    @error('phone')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                @php
                                    $lead_status = 
                                    array('Qualifications', 'Needs Analysis', 'Direct Call', 'Proposal/Price', 'Quote','Negotiation','Closed Won','Closed Lost');
                                @endphp
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Lead Status</label>
                                        <div class="col-md-12">
                                            <select class="form-control custom-select" placeholder="Lead Status" name="status">
                                                <option value="">Lead Status</option>
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
                                </div>
                                @php
                                    $lead_source = array('Advertising', 'Social Media', 'Direct Call', 'Search');
                                @endphp
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label">Lead Source</label>
                                        <div class="col-md-12">
                                            <select class="form-control custom-select" name="source">
                                                <option value="">Lead Source</option>
                                                @foreach($lead_source as $leadSource)
                                                    @if($leadSource == $lead_details['source'])
                                                        <option value="{{ $leadSource }}" selected>{{ $leadSource }}</option>
                                                    @else
                                                        <option value="{{ $leadSource }}">{{ $leadSource }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div  class="col-md-12">
                                    <h3 class="mb-3 mt-3 text-dark">Additional Information</h3>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Street</label>
                                        <input class="form-control" placeholder="Street" type="text" name="street" value="{{ $lead_details->street }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">City</label>
                                        <input class="form-control" placeholder="City" type="text" name="city" value="{{ $lead_details->city }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">State</label>
                                        <input class="form-control" placeholder="State" type="text" name="state" value="{{ $lead_details->state }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Zip Code</label>
                                        <input class="form-control" placeholder="Zip Code" type="text" name="zip" value="{{ $lead_details->zip }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Country</label>
                                        <input class="form-control" placeholder="Country" type="text" name="country" value="{{ $lead_details->country }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h3 class="text-dark mb-3 mt-3">Description Information</h3>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Description</label>
                                        <textarea class="form-control" id="Description" rows="3" placeholder="{{ $lead_details->description }}" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button name="submit" type="submit" class="btn btn-success" value="submit">Update</button>
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