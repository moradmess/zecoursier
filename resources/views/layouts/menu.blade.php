<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="{{ secure_asset('img/logo.jpg') }}">
  <link rel="stylesheet" href="{{ secure_asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ secure_asset('assets/css/bootstrap-social.css') }}">
  <link rel="stylesheet" href="{{ secure_asset('assets/css/font-awesome.css') }}">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="{{ secure_asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ secure_asset('assets/js/bootstrap.min.js') }}"></script>
  <!--<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo.jpg') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>-->
  <title>ZeCoursier</title>
  <style type="text/css">
  @font-face{
    font-family:'glyphicons-halflings-regular';
    src:url({{public_path() . '/assets/fonts/glyphicons-halflings-regular.ttf'}});
    }
  @font-face{ 
    font-family:'FontAwesome';
    src:url({{public_path() . '/assets/fonts/FontAwesome.otf'}});
    }
    footer {
      border: 1px solid rgb(232,232,232);
      background-color: rgb(81,81,81);
      border-radius: 5px;
      padding-top: 10px;
      padding-left: 5px;
      padding-right: 5px;
    }
    #b {
      float: right;
    }
    body {
      font-family:Calibri;
    }
    nav {
      font-size: 1.2em;
    }

.fa:hover {
    opacity: 0.5;
  }
  </style>
</head>
<body>
  <div class="container">
    <header>
   <nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img width="30" style="margin-top: -5px;" src="{{ asset('img/logo.jpg') }}"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li id="accueil"><a href="{{ url('/') }}">Accueil<span class="sr-only">(current)</span></a></li>
        <li id="propos"><a href="{{ url('/apropos') }}">A propos</a></li>
        <li id="service"><a href="{{ url('/service') }}">Nos Service</a></li>
        <li id="contact"><a href="{{ url('/contact') }}">Contactez-nous</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
</nav>
</header>

@yield('content')

<hr />
<footer>
  <div class="row" style="text-align: center;color: white;font-size: 1.2em">
    <p class="col-sm-4">ICE: 002335495000074</p>
    <p class="col-sm-4">Tous les droits réservés</p>
    <p class="col-sm-4">ZeCoursier</p>
  </div>
</footer>
  </div>
</body>
</html>
