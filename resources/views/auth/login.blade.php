<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="MouthPiece"/>
        <link rel="shortcut icon" href="{{ asset('public/img/favicon.ico') }}"/>
        <!-- Chrome, Firefox OS, Opera and Vivaldi -->
        <meta name="theme-color" content="#0093DD">
        <!-- Windows Phone -->
        <meta name="msapplication-navbutton-color" content="#0093DD">
        <!-- iOS Safari -->
        <meta name="apple-mobile-web-app-status-bar-style" content="#0093DD">
        <title> MouthPiece.</title>
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
        <!--Font Awesome [ OPTIONAL ]-->
        <link href="{{ asset('public/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <!--Switchery [ OPTIONAL ]-->
        <link href="{{ asset('public/plugins/switchery/switchery.min.css') }}" rel="stylesheet">
        <!--Bootstrap Select [ OPTIONAL ]-->
        <link href="{{ asset('public/plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet">
        <!--Demo [ DEMONSTRATION ]-->
        <link href="{{ asset('public/css/demo/jasmine.css') }}" rel="stylesheet">        
        <link href="{{ asset('public/css/main.css') }}" rel="stylesheet">
        <!--SCRIPT-->
        <!--=================================================-->
        <!--Page Load Progress Bar [ OPTIONAL ]-->
        <link href="{{ asset('public/plugins/pace/pace.min.css') }}" rel="stylesheet">
        <script src="{{ asset('public/plugins/pace/pace.min.js') }}"></script>
    </head>
    <!--TIPS-->
    <!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
    <body>
        <div id="container" class="cls-container">
            <!-- LOGIN FORM -->
            <!--===================================================-->                       

            @if ($message = Session::get('error'))
                <div class="alert alert-warning text-center">
                    <p>{{ $message }}</p>
                </div>
            @endif          
            <div class="lock-wrapper">
                <div class="panel lock-box">
                    <div class="center"> <img alt="" src="{{ asset('public/img/mouthpiece.png') }}" /> </div>
                    <h4> Hello User !</h4>
                    <p class="text-center">Please login to Access your Account</p>
                    <div class="row">
                        <form action="{{ route('login') }}" method="post" class="form-inline">
                            {{ csrf_field() }}
                             <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="{{ $errors->has('username') ? ' has-error' : '' }} text-left">
                                    <label class="text-muted">Username</label>
                                    <input id="signupInputEmail1" type="text" placeholder="Enter usernme" name="username" class="form-control" required />
                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="{{ $errors->has('password') ? ' has-error' : '' }} text-left">
                                    <label for="signupInputPassword" class="text-muted">Password</label>
                                    <input id="signupInputPassword" type="password" name="password" placeholder="Password" class="form-control lock-input" required />
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>                                
                                <div class="pull-left pad-btm">
                                    <div class="checkbox">                                
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-block btn-primary">
                                Sign In
                                </button>
                            </div>                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        <!--JAVASCRIPT-->
        <!--=================================================-->
        <!--jQuery [ REQUIRED ]-->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--Fast Click [ OPTIONAL ]-->
        <script src="{{ asset('public/plugins/fast-click/fastclick.min.js') }}"></script>
        <!--Switchery [ OPTIONAL ]-->
        <script src="{{ asset('public/plugins/switchery/switchery.min.js') }}"></script>
        <!--Bootstrap Select [ OPTIONAL ]-->
        <script src="{{ asset('public/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
    </body>
</html>