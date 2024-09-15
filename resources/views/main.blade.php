<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Mini CRM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://uxliner.com/adminkit/demo/main/ltr/dist/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon-16x16.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/et-line-font.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/simple-line-icons.css')}}">

</head>

<body class="skin-blue sidebar-mini">
    <div class="wrapper boxed-wrapper">
        <header class="main-header">
              <a href="{{route('home')}}" class="logo blue-bg">
                <span class="logo-mini"><img src="{{asset('img/logo-blue.png')}}" alt=""></span>
                <span class="logo-lg"><img src="{{asset('img/logo-blue.png')}}" alt=""></span> 
              </a>
            <nav class="navbar blue-bg navbar-static-top">
                <!-- Sidebar toggle button-->
                <ul class="nav navbar-nav pull-left">
                    <li><a class="sidebar-toggle" data-toggle="push-menu" href=""></a> </li>
                </ul>
                <div class="pull-left search-box">
                </div>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle"
                                data-toggle="dropdown"><span
                                    class="hidden-xs">{{$user[0]['name']}}</span> </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <div class="pull-left user-img">
                                    </div>
                                    <p class="text-left">{{$user[0]['name']}}<small>{{$user[0]['email']}}</small> </p>
                                </li>
                                <li><a href="#"><i class="icon-profile-male"></i> My Profile</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ url('/logout')}}"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <div class="sidebar">
                <div class="user-panel">
                    <div class="image text-center"></div>
                    <div class="info">
                        <p>{{$user[0]['name']}}</p>
                    </div>
                </div>
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">PERSONAL</li>
                    <li class="{{(Route::current()->getName() === 'home') ? 'active' : ''}}">
                        <a href="{{url('/home')}}"> <i class="icon-home"></i>
                            <span>Dashboard</span> <span class="pull-right-container"> </span>
                        </a>
                    </li>
                    <li class="treeview {{ Request::is('leads*') ? 'active' : '' }}"> 
                        <a href="#"> <i class="icon-grid"></i> <span>Leads</span> <span
                                class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i> </span> 
                        </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{url('/leads/add-lead')}}"><i class="fa fa-angle-right"></i> Add Leads</a>
                            </li>
                            <li class="">
                                <a href="{{url('/leads/manage-leads')}}"><i class="fa fa-angle-right"></i>Manage
                                    Leads
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview {{ Request::is('accounts*') ? 'active' : '' }}"> <a href="#"> <i class="icon-grid"></i> <span>Accounts</span> <span
                                class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{url('/accounts/add-account')}}"><i class="fa fa-angle-right"></i> Add Account</a>
                            </li>
                            <li class="">
                                <a href="{{url('/accounts/manage-accounts')}}"><i class="fa fa-angle-right"></i>Manage
                                Accounts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview {{ Request::is('contacts*') ? 'active' : '' }}"> <a href="#"> <i class="icon-grid"></i> <span>Contacts</span> <span
                                class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{url('/contacts/add-contact')}}"><i class="fa fa-angle-right"></i> Add Contact</a>
                            </li>
                            <li class="">
                                <a href="{{url('/contacts/manage-contacts')}}"><i class="fa fa-angle-right"></i>Manage
                                Contacts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview {{ Request::is('deals*') ? 'active' : '' }}"> <a href="#"> <i class="icon-grid"></i> <span>Deals</span> <span
                                class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu">
                            <li class="">
                                <a href="{{url('/deals/add-deal')}}"><i class="fa fa-angle-right"></i> Add Deal</a>
                            </li>
                            <li class="">
                                <a href="{{url('/deals/manage-deals')}}"><i class="fa fa-angle-right"></i>Manage
                                Deals</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
        @yield('dynamic_page')
        <footer class="main-footer">
            <div class="pull-right hidden-xs"></div>
        </footer>
    </div>

    <script src="{{asset('js/jquery.min.js')}}"></script>

    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <script src="{{asset('js/adminkit.js')}}"></script>

    <script src="{{asset('js/raphael-min.js')}}"></script>
    <script src="{{asset('js/morris.js')}}"></script>
    <script src="{{asset('js/dashboard1.js')}}"></script>
    <script src="{{asset('js/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/jquery.peity.init.js')}}"></script>
</body>
</html>
