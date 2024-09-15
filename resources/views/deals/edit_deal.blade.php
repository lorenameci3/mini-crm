@extends('main')
@section('dynamic_page')
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Edit Deal</h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><i class="fa fa-angle-right"></i> Edit Deal</li>
        </ol>
    </div>
    <div class="content">
        <div class="row m-t-3">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header bg-blue">
                        <h5 class="text-white m-b-0">Add Deal</h5>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Amount <span class="text-danger">*</span></label>
                                        <input class="form-control" placeholder="Amount" type="number" name="amount" 
                                        value="{{ $deal_details->amount }}">
                                        <span class="fa fa-user form-control-feedback" aria-hidden="true"></span> 
                                    </div>
                                    @error('amount')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Deal Name <span class="text-danger">*</span></label>
                                        <input class="form-control" placeholder="Deal Name" type="text" name="deal_name" 
                                        value="{{ $deal_details->deal_name }}">
                                        <span class="fa fa-user form-control-feedback" aria-hidden="true"></span> 
                                    </div>
                                    @error('deal_name')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Closing Date <span class="text-danger">*</span></label>
                                        <input class="form-control" placeholder="Closing Date" type="date" name="closing_date" value="{{ $deal_details->closing_date }}">
                                        <span class="fa fa-user form-control-feedback" aria-hidden="true"></span> 
                                    </div>
                                    @error('closing_date')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                @php
                                    $status = 
                                    array('Qualifications', 'Needs Analysis', 'Direct Call', 'Proposal/Price', 'Quote','Negotiation','Closed Won','Closed Lost');
                                @endphp
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label">Deal Stage</label>
                                        <div class="col-md-12">
                                            <select class="form-control custom-select" placeholder="Deal Stage" name="deal_stage" 
                                            value="{{ $deal_details->deal_stage }}">
                                                <option value="">Deal Stage</option>
                                                @foreach($status as $dealStatus)
                                                    @if($dealStatus == $deal_details['deal_stage'])
                                                        <option value="{{ $dealStatus}}" selected>{{ $dealStatus}}</option>
                                                    @else
                                                        <option value="{{ $dealStatus}}">{{ $dealStatus}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            @error('deal_stage')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label">Account Name</label>
                                        <div class="col-md-12">
                                            <select class="form-control custom-select" placeholder="Account Name" name="account_id" 
                                            value="{{ $deal_details->account_id }}">
                                                <option value="">Account Name</option>
                                                @foreach($accounts as $account)
                                                    @if($account->id == $deal_details->account_id)
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
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group has-feedback">
                                        <label class="control-label">Contact Name <span class="text-danger">*</span></label>
                                        <select class="form-control custom-select" placeholder="Contact Name" name="contact_id"
                                         value="{{ $deal_details->contact_id }}">
                                            <option value="">Contact Name</option>
                                            @foreach($contacts as $contact)
                                                @if($contact->id == $deal_details->contact_id)
                                                        <option value="{{ $contact->id}}" selected>{{$contact->contact_name}}</option>
                                                    @else
                                                        <option value="{{ $contact->id}}">{{$contact->contact_name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('contact_id')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button name="submit" type="submit" class="btn btn-success" value="submit">Submit</button>
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