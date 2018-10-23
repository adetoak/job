<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="MouthPiece"/>
        <link rel="shortcut icon" href="asset('public/img/favicon.ico')"/>
        <!-- Chrome, Firefox OS, Opera and Vivaldi -->
        <meta name="theme-color" content="#0093DD">
        <!-- Windows Phone -->
        <meta name="msapplication-navbutton-color" content="#0093DD">
        <!-- iOS Safari -->
        <meta name="apple-mobile-web-app-status-bar-style" content="#0093DD">
        <title> MouthPiece</title>
        <!--STYLESHEET-->
        <!--=================================================-->
        <!--Roboto Slab Font [ OPTIONAL ] -->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">
        <!--Bootstrap Stylesheet [ REQUIRED ]-->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <!--Jasmine Stylesheet [ REQUIRED ]-->
        <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
        <!--Jasmine Stylesheet [ REQUIRED ]-->
        <link href="{{ asset('public/css/main.css') }}" rel="stylesheet">
        <!--Font Awesome [ OPTIONAL ]-->
        <link href="{{ asset('public/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <!--Switchery [ OPTIONAL ]-->
        <style type="text/css">
            .dataTables_filter,
            .dataTables_paginate .pagination {
                float: right;
            }
        </style>
    </head>
    <!--TIPS-->
    <!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
    <body>
        <div id="container" class="effect mainnav-sm navbar-fixed mainnav-fixed">
            <!--NAVBAR-->
            <!--===================================================-->
            <header id="navbar">
                <div id="navbar-container" class="boxed">
                    <!--Brand logo & name-->
                    <!--================================-->
                    <div class="navbar-header">
                        <a href="" class="navbar-brand">
                            <img class="img-responsive brand-icon" src="{{ asset('public/img/mouthpiece.png') }}"">
                        </a>
                    </div>
                    <!--================================-->
                    <!--End brand logo & name-->
                    <!--Navbar Dropdown-->
                    <!--================================-->
                    <div class="navbar-content clearfix">
                        <ul class="nav navbar-top-links pull-left">
                            <!--Navigation toogle button-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li class="tgl-menu-btn">
                                <a class="mainnav-toggle" href="#"> <i class="fa fa-navicon fa-lg"></i> </a>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End Navigation toogle button-->
                        </ul>
                        <ul class="nav navbar-top-links pull-right">
                            <!--Fullscreen toogle button-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li class="hidden-xs" id="toggleFullscreen">
                                <a class="fa fa-expand" data-toggle="fullscreen" href="#" role="button">
                                <span class="sr-only">Toggle fullscreen</span>
                                </a>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End Fullscreen toogle button-->
                            <!--User dropdown-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li id="dropdown-user" class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                    <span class="pull-right"> <img class="img-circle img-user media-object" src="{{ asset('public/img/favicon.png') }}" alt="Profile Picture"> </span>
                                    <div class="username hidden-xs">username</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right with-arrow">
                                    <!-- User dropdown menu -->
                                    <ul class="head-list">
                                        <li>
                                            <a href="profile"> <i class="fa fa-user fa-fw"></i> Profile </a>
                                        </li>
                                        
                                        <li>
                                            <a href="manage-users"> <i class="fa fa-users fa-fw"></i> Manage Users </a>
                                                                            
                                        <li>
                                            <a href="logs"> <i class="fa fa-cogs fa-fw"></i> Logs </a>
                                        </li>
                                                                            
                                        <li>
                                            <a href="login/logout"> <i class="fa fa-sign-out fa-fw"></i> Logout </a>
                                        </li>                                        
                                    </ul>
                                </div>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End user dropdown-->
                        </ul>
                    </div>
                    <!--================================-->
                    <!--End Navbar Dropdown-->
                </div>
            </header>
            <!--===================================================-->
            <!--END NAVBAR-->
            <div class="boxed">
                <!--CONTENT CONTAINER-->
                <!--===================================================-->
                <div id="content-container">
                     <!--Page content-->
                    <!--===================================================-->
                    <div id="page-content">
                        
                    @yield('content')

                    </div>
                <!--===================================================-->
                <!--END CONTENT CONTAINER-->
                <!--MAIN NAVIGATION-->
                <!--===================================================-->
                <nav id="mainnav-container">
                    <div id="mainnav">
                        <!--Menu-->
                        <!--================================-->
                        <div id="mainnav-menu-wrap">
                            <div class="nano">
                                <div class="nano-content">
                                    <ul id="mainnav-menu" class="list-group">
                                        <!--Category name-->
                                        <li class="list-header">Navigation</li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href="dashboard">
                                            <i class="fa fa-dashboard"></i>
                                            <span class="menu-title">Dashboard</span>
                                            <i class="arrow"></i>
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a href="{{ url('clients') }}">
                                            <i class="fa fa-list"></i>
                                            <span class="menu-title">Clients</span>
                                            <i class="arrow"></i>
                                            </a>
                                        </li>                                        
                                        <!--Menu list item-->                                        
                                        <li>
                                            <a href="{{ url('services') }}">
                                            <i class="fa fa-globe"></i>
                                            <span class="menu-title">Services</span>
                                            <i class="arrow"></i>
                                            </a>
                                        </li>                                        
                                        <!--Menu list item-->
                                        
                                        <li>
                                            <a href="{{ url('products') }}">
                                            <i class="fa fa-eye"></i>
                                            <span class="menu-title">Products</span>
                                            <i class="arrow"></i>
                                            </a>
                                        </li>                                        

                                        <li>
                                            <a href="{{ url('job-requests') }}">
                                            <i class="fa fa-question"></i>
                                            <span class="menu-title">Job Posts</span>
                                            <i class="arrow"></i>
                                            </a>
                                        </li>                        
                                        
                                            
                                        <li>
                                            <a href="{{ url('conversations') }}">
                                            <i class="fa fa-inbox"></i>
                                            <span class="menu-title">Conversations</span>
                                            <i class="arrow"></i>
                                            </a>
                                        </li>
                                        
                                                                                            
                                        <li>
                                            <a href="{{ url('transactions') }}">
                                            <i class="fa fa-money"></i>
                                            <span class="menu-title">Transactions</span>
                                            <i class="arrow"></i>
                                            </a>
                                        </li>                                                                                
                                        <li>
                                            <a href="{{ url('manage-users') }}">
                                            <i class="fa fa-users"></i>
                                            <span class="menu-title">Manage Users</span>
                                            <i class="arrow"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('mail') }}">
                                            <i class="fa fa-envelope"></i>
                                            <span class="menu-title">Mail</span>
                                            <i class="arrow"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('blog') }}">
                                            <i class="fa fa-edit"></i>
                                            <span class="menu-title">Blog Posts</span>
                                            <i class="arrow"></i>
                                            </a>
                                        </li>                               
                                        <li>
                                            <a href="{{ url('logs') }}">
                                            <i class="fa fa-cogs"></i>
                                            <span class="menu-title">Logs</span>
                                            <i class="arrow"></i>
                                            </a>
                                        </li>                                        
                                        
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                        <!--================================-->
                        <!--End menu-->
                    </div>
                </nav>
                <!--===================================================-->
                <!--END MAIN NAVIGATION-->
            </div>
            <!-- FOOTER -->
            <!--===================================================-->
            <footer id="footer">
                <!-- Visible when footer positions are fixed -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <div class="show-fixed pull-right">
                    <ul class="footer-list list-inline">
                        <li>
                            <p class="text-sm">SEO Proggres</p>
                            <div class="progress progress-sm progress-light-base">
                                <div style="width: 80%" class="progress-bar progress-bar-danger"></div>
                            </div>
                        </li>
                        <li>
                            <p class="text-sm">Online Tutorial</p>
                            <div class="progress progress-sm progress-light-base">
                                <div style="width: 80%" class="progress-bar progress-bar-primary"></div>
                            </div>
                        </li>
                        <li>
                            <button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
                        </li>
                    </ul>
                </div>
                <!-- Visible when footer positions are static -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <div class="hide-fixed pull-right pad-rgt">Admin: Currently v1.0</div>
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <p class="pad-lft">&#0169; {{ date('Y') }} MouthPiece.ng</p>
            </footer>
            <!--===================================================-->
            <!-- END FOOTER -->
            <!-- SCROLL TOP BUTTON -->
            <!--===================================================-->
            <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
            <!--===================================================-->
        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        <!--JAVASCRIPT-->
        <!--=================================================-->
        <!--jQuery [ REQUIRED ]-->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
        @include('layouts.view_scripts')
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=etheh7tjedbexnyeubhy1dkzdm8fqr9nh784k3pt1oy4kapv"></script>
        <script type="text/javascript">
            tinymce.init({
              selector: 'textarea',
              height: 200,
              plugins: 'image media codesample imagetools link',
              toolbar: 'link image media codesample',
              image_caption: true,
              media_live_embeds: true,
              imagetools_cors_hosts: ['tinymce.com', 'codepen.io'],
              content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.css',
                '//www.tinymce.com/css/codepen.min.css'    
              ]
            });
        </script>

       
    </body>
</html>