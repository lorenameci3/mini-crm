<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Mini CRM</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- v4.0.0 -->
    <link rel="stylesheet" href="https://uxliner.com/adminkit/demo/main/ltr/dist/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon-16x16.png')}}">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/et-line-font.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/simple-line-icons.css')}}">

</head>

<body class="skin-blue sidebar-mini">
    <div class="wrapper boxed-wrapper">
        <header class="main-header">
            <!-- Logo -->
              <a href="{{route('home')}}" class="logo blue-bg">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><img src="{{asset('img/logo-blue.png')}}" alt=""></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><img src="{{asset('img/logo-blue.png')}}" alt=""></span> 
              </a>
            <!-- Header Navbar -->
            <nav class="navbar blue-bg navbar-static-top">
                <!-- Sidebar toggle button-->
                <ul class="nav navbar-nav pull-left">
                    <li><a class="sidebar-toggle" data-toggle="push-menu" href=""></a> </li>
                </ul>
                <div class="pull-left search-box">
                    <form action="#" method="get" class="search-form">
                        <div class="input-group">
                            <input name="search" class="form-control" placeholder="" type="text">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                                        class="fa fa-search"></i> </button>
                            </span></div>
                    </form>
                    <!-- search form -->
                </div>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages -->
                        <li class="dropdown messages-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 new messages</li>
                                <li>
                                    <ul class="menu">
                                        <li><a href="#">
                                                <div class="pull-left"><img src="" class="img-circle" alt="User Image">
                                                    <span class="profile-status online pull-right"></span></div>
                                                <h4>Alex C. Patton</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">9:30 AM</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="pull-left"><img src="" class="img-circle" alt="User Image">
                                                    <span class="profile-status offline pull-right"></span></div>
                                                <h4>Nikolaj S. Henriksen</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">10:15 AM</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="pull-left"><img src="" class="img-circle" alt="User Image">
                                                    <span class="profile-status away pull-right"></span></div>
                                                <h4>Kasper S. Jessen</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">8:45 AM</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="pull-left"><img src="" class="img-circle" alt="User Image">
                                                    <span class="profile-status busy pull-right"></span></div>
                                                <h4>Florence S. Kasper</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">12:15 AM</span></p>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications  -->
                        <li class="dropdown messages-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Notifications</li>
                                <li>
                                    <ul class="menu">
                                        <li><a href="#">
                                                <div class="pull-left icon-circle red"><i class="icon-lightbulb"></i>
                                                </div>
                                                <h4>Alex C. Patton</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">9:30 AM</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="pull-left icon-circle blue"><i class="fa fa-coffee"></i>
                                                </div>
                                                <h4>Nikolaj S. Henriksen</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">1:30 AM</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="pull-left icon-circle green"><i class="fa fa-paperclip"></i>
                                                </div>
                                                <h4>Kasper S. Jessen</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">9:30 AM</span></p>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="pull-left icon-circle yellow"><i class="fa  fa-plane"></i>
                                                </div>
                                                <h4>Florence S. Kasper</h4>
                                                <p>I've finished it! See you so...</p>
                                                <p><span class="time">11:10 AM</span></p>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">Check all Notifications</a></li>
                            </ul>
                        </li>
                        <!-- User Account  -->
                        <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle"
                                data-toggle="dropdown"> <img src="" class="user-image" alt="User Image"> <span
                                    class="hidden-xs">Alexander Pierce</span> </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <div class="pull-left user-img"><img src="" class="img-responsive img-circle"
                                            alt="User"></div>
                                    <p class="text-left">Florence Douglas <small>florence@gmail.com</small> </p>
                                </li>
                                <li><a href="#"><i class="icon-profile-male"></i> My Profile</a></li>
                                <li><a href="#"><i class="icon-wallet"></i> My Balance</a></li>
                                <li><a href="#"><i class="icon-envelope"></i> Inbox</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="icon-gears"></i> Account Setting</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ url('/logout')}}"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="image text-center"><img src="{{asset('img/s.jpg')}}" class="img-circle"
                            alt="User Image"> </div>
                    <div class="info">
                        <p>Alexander Pierce</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- sidebar menu -->
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
            <!-- /.sidebar -->
        </aside>
        @yield('dynamic_page')
        <footer class="main-footer">
            <div class="pull-right hidden-xs">Version 1.0</div>
            Copyright © 2018 Yourdomian. All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="{{asset('js/jquery.min.js')}}"></script>

    <!-- v4.0.0-alpha.6 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <!-- template -->
    <script src="{{asset('js/adminkit.js')}}"></script>

    <script src="{{asset('js/raphael-min.js')}}"></script>
    <!-- Morris JavaScript -->
    <script src="{{asset('js/morris.js')}}"></script>
    <script src="{{asset('js/dashboard1.js')}}"></script>
    <script src="{{asset('js/jquery.peity.min.js')}}"></script>
    <!-- Chart Peity JavaScript -->
    <script src="{{asset('js/jquery.peity.init.js')}}"></script>
</body>

</html>
