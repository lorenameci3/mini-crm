@extends('main')
@section('dynamic_page')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <h1>Contacts</h1>
        <ol class="breadcrumb">
            <li><a href="#">Contacts</a></li>
            <li><i class="fa fa-angle-right"></i> Manage Contacts</li>
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
                                <h4 class="text-black m-b-1">All Contacts</h4>
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Contact Name</th>
                                                    <th>Account Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($contacts as $contact)
                                                    <tr>
                                                        <td><a href="">{{ $contact->contact_name }}</a></td>
                                                        <td><a href="">{{ $contact->getAccountDetail->account_name ?? '' }}</a></td>
                                                        <td>{{ $contact->email}}</td>
                                                        <td>{{ $contact->phone }}</td>
                                                        <td class="d-flex justify-between">
                                                            <a href="{{url('/contacts/edit-contact/'.$contact->id)}}"
                                                            class="btn btn-primary btn-sm">
                                                                <i class="fa fa-edit p-2"></i>
                                                            </a>
                                                            <a href="{{url('/contacts/delete-contact/'.$contact->id)}}"
                                                            onclick="return confirm('Are you sure you want to delete this lead.')"
                                                            class="btn btn-danger btn-sm"><i class="fa fa-trash p-2"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Contact Name</th>
                                                    <th>Account Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                {!! $contacts->links() !!}
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