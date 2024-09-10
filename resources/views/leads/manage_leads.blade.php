@extends('main')
@section('dynamic_page')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <h1>Leads</h1>
        <ol class="breadcrumb">
            <li><a href="#">Leads</a></li>
            <li><i class="fa fa-angle-right"></i> Manage leads</li>
        </ol>
    </div>
    <!-- Main content -->
    <div class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4 class="text-black m-b-1">All Leads</h4>
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Lead Name</th>
                                                    <th>Company</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Lead Source</th>
                                                    <th>Lead Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($leads as $lead)
                                                    <tr>
                                                        <td><a href="{{url('/leads/view-lead/' .$lead->id)}}">{{ $lead->firstname }} {{ $lead->lastname }}</a></td>
                                                        <td>{{ $lead->company }}</td>
                                                        <td>{{ $lead->email}}</td>
                                                        <td>{{ $lead->phone }}</td>
                                                        <td>{{ $lead->source }}</td>
                                                        <td>{{ $lead->status }}</td>
                                                        <td class="d-flex justify-between">
                                                            <a href="{{url('/leads/edit-lead/' .$lead->id)}}"
                                                            class="btn btn-primary btn-sm">
                                                                <i class="fa fa-edit p-2"></i>
                                                            </a>
                                                            <a href="{{url('/leads/delete-lead/' .$lead->id)}}"
                                                            onclick="return confirm('Are you sure you want to delete this lead.')"
                                                            class="btn btn-danger btn-sm"><i class="fa fa-trash p-2"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Lead Name</th>
                                                    <th>Company</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Lead Source</th>
                                                    <th>Lead Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div>
                                    Showing 12 of 28
                                </div>
                                <nav aria-label="...">
                                    <ul class="pagination">
                                        <li class="page-item disabled">
                                        <span class="page-link">Previous</span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active">
                                        <span class="page-link">
                                            2
                                            <span class="sr-only">(current)</span>
                                        </span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main row --> 
    </div>
    <!-- /.content --> 
</div>

<!-- ./wrapper --> 
@endsection