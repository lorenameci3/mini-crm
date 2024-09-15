@extends('main')
@section('dynamic_page')
<div class="content-wrapper"> 
    <div class="content-header sty-one">
        <h1>Modern Dashboard</h1>
        <ol class="breadcrumb">
        <li><a href="{{ url('/home')}}">Home</a></li>
        <li><i class="fa fa-angle-right"></i> Modern Dashboard</li>
        </ol>
    </div>

    <div class="content">


        <div class="row">
            <div class="col-lg-3">
                <div class="tile-progress tile-pink">
                    <div class="tile-header">
                        <h5>Leads</h5>
                        <h3>{{$leads}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="tile-progress tile-red">
                    <div class="tile-header">
                        <h5>Accounts</h5>
                        <h3>{{$accounts}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="tile-progress tile-cyan">
                    <div class="tile-header">
                        <h5>Contacts</h5>
                        <h3>{{$contacts}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="tile-progress tile-aqua">
                    <div class="tile-header">
                        <h5>Deals</h5>
                        <h3>{{$deals}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection