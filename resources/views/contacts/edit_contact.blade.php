@extends('main')
@section('dynamic_page')
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Edit Contact</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><i class="fa fa-angle-right"></i> Edit Contact</li>
        </ol>
    </div>
    <div class="content">
        <div class="row m-t-3">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header bg-blue">
                        <h5 class="text-white m-b-0">Add Contact</h5>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Contact Name <span class="text-danger">*</span></label>
                                        <input class="form-control" placeholder="Contact Name" type="text" name="contact_name" 
                                        value="{{ $contact_details->contact_name }}">
                                        <span class="fa fa-user form-control-feedback" aria-hidden="true"></span> 
                                    </div>
                                    @error('contact_name')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Account Name <span class="text-danger">*</span></label>
                                        <select class="form-control custom-select" placeholder="Account Name" name="account_id" 
                                        value="{{ $contact_details->account_id }}">
                                        <option value="">Account Name</option>
                                        @foreach($account_list as $account)
                                            @if($account->id == $contact_details->account_id)
                                                    <option value="{{ $account->id}}" selected>{{$account->account_name}}</option>
                                                @else
                                                    <option value="{{ $account->id}}">{{$account->account_name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('account_id')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Phone <span class="text-danger">*</span></label>
                                        <input class="form-control" placeholder="Phone" type="text" name="phone" value="{{ $contact_details->phone }}">
                                        <span class="fa fa-user form-control-feedback" aria-hidden="true"></span> 
                                    </div>
                                    @error('phone')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Email <span class="text-danger">*</span></label>
                                        <input class="form-control" placeholder="Website" type="text" name="email" value="{{ $contact_details->email }}">
                                        <span class="fa fa-briefcase form-control-feedback" aria-hidden="true"></span> 
                                    </div>
                                    @error('email')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
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