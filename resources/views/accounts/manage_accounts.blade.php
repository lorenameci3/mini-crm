@extends('main')
@section('dynamic_page')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <h1>Accounts</h1>
        <ol class="breadcrumb">
            <li><a href="#">Accounts</a></li>
            <li><i class="fa fa-angle-right"></i> Manage Accounts</li>
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
                                <h4 class="text-black m-b-1">All Accounts</h4>
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Account Name</th>
                                                    <th>Phone</th>
                                                    <th>Website</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($accounts as $account)
                                                    <tr>
                                                        <td><a href="">{{$account->account_name}}</a></td>
                                                        <td>{{$account->phone}}</td>
                                                        <td>{{$account->website}}</td>
                                                        <td class="d-flex justify-between">
                                                            <a href="{{url('/accounts/edit-account/' .$account->id)}}"
                                                            class="btn btn-primary btn-sm">
                                                                <i class="fa fa-edit p-2"></i>
                                                            </a>
                                                            <a href="{{url('/accounts/delete-account/' .$account->id)}}"
                                                            onclick="return confirm('Are you sure you want to delete this lead.')"
                                                            class="btn btn-danger btn-sm"><i class="fa fa-trash p-2"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Account Name</th>
                                                    <th>Phone</th>
                                                    <th>Website</th>
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