<!DOCTYPE html>
<html lang="en">
  <head>
    @section('head')
    <meta charset="utf-8">
    <title>Situs Pemesanan Tiket Cipaganti</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="{{asset('/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="{{asset('/flatui/css/flat-ui.min.css')}}" rel="stylesheet">

    <!-- Datetime picker -->
    <link href="{{asset('/datetimepicker/jquery.datetimepicker.css')}}" rel='stylesheet'>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
    @show
  </head>
  <body>
    <div class='container'>
      <nav class="navbar navbar-default" role="navigation" style='margin-top:20px;'>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <a class='navbar-header'>
              <div class='logo'>
              <img src="{{asset('/img/logo.png')}}" height='50px'/>
          </div>
          </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-01">
          <div class='navbar-right'>
              <ul class="nav navbar-nav">
                <li><a href="{{route('tiket')}}">Tiket</a></li>
                <li><a href="#fakelink">FAQ</a></li>
              </ul>
          </div>
        </div><!-- /.navbar-collapse -->
      </nav>
    </div>
    <div class='container'>
      @yield('content')
    </div>
    @section('script')
      <!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
      <script src="{{asset('/jquery/jquery.min.js')}}"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="{{asset('/bootstrap/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('/flatui/js/flat-ui.min.js')}}"></script>
      <script src="{{asset('/datetimepicker/jquery.datetimepicker.js')}}"></script>
    @show
  </body>
</html>
