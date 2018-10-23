<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'MouthPiece.ng') }}
            </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="sr-only">Toggle navigation</span>
            </button>
        </div>        
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <!-- nav-bar left -->
            </ul>            
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())                     
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Selling <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('post-service') }}">Post Service</a></li>
                            <li><a href="{{ url('job-offers') }}">Job Offers</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">profile</li>
                            <li><a href="#">My Orders</a></li>
                            <li><a href="#">Statistics</a></li>
                            <li><a href="{{ url('myservices') }}">My Services</a></li>
                        </ul>
                    </li>                                        
                @else                                         
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>          
        </div><!--/.nav-collapse -->
    </div>
</div>