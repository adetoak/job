<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="{{../../../../favicon.ico}}"> -->

    <title>Email Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">

   
    <style type="text/css">
            /* Space out content a bit */
      body {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
      }

      /* Everything but the jumbotron gets side spacing for mobile first views */
      .header,
      .marketing,
      .footer {
        padding-right: 1rem;
        padding-left: 1rem;
      }

      /* Custom page header */
      .header {
        padding-bottom: 1rem;
        border-bottom: .05rem solid #e5e5e5;
      }
      /* Make the masthead heading the same height as the navigation */
      .header h3 {
        margin-top: 0;
        margin-bottom: 0;
        line-height: 3rem;
      }

      /* Custom page footer */
      .footer {
        padding-top: 1.5rem;
        color: #777;
        border-top: .05rem solid #e5e5e5;
      }

      /* Customize container */
      @media (min-width: 48em) {
        .container {
          max-width: 46rem;
        }
      }
      .container-narrow > hr {
        margin: 2rem 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        text-align: center;
        border-bottom: .05rem solid #e5e5e5;
      }
      .jumbotron .btn {
        padding: .75rem 1.5rem;
        font-size: 1.5rem;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 3rem 0;
      }
      .marketing p + h4 {
        margin-top: 1.5rem;
      }

      /* Responsive: Portrait tablets and up */
      @media screen and (min-width: 48em) {
        /* Remove the padding we set earlier */
        .header,
        .marketing,
        .footer {
          padding-right: 0;
          padding-left: 0;
        }
        /* Space out the masthead */
        .header {
          margin-bottom: 2rem;
        }
        /* Remove the bottom border on the jumbotron for visual effect */
        .jumbotron {
          border-bottom: 0;
        }
      }
    </style>
  </head>

  <body>
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </nav>
        <h3 class="text-muted">MouthPiece</h3>
      </div>

      <div class="jumbotron">
        <h1 class="display-3">Jumbotron heading</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>

        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
      </div>

      <footer class="footer">
        <div class="col-lg-6">
          <div class="stay-connected-icons">
          <div class="stay-connected-content">
            <a href="{{ url('https://www.facebook.com/mouthpiece') }}">
              <span class="fui-facebook"></span>
            </a>
            <a href="{{ url('https://www.youtube.com/mouthpiece') }}">
                    <span class="fui-youtube"></span>
                  </a>
                  <a href="{{ url('https://www.instagram.com/mouthpiece') }}">
                    <span class="fui-instagram"></span>
                  </a>
                  <a href="{{ url('https://www.twitter.com/mouthpiece') }}">
                    <span class="fui-twitter"></span>           
                  </a>
          </div>          
        </div>
        </div>
        <div class="col-lg-6">&copy; MouthPiece.ng 2017</div>       
      </footer>

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
