@extends('layouts.menu')

@section('content')
<script type="text/javascript"> 
document.getElementById('accueil').className = "active";
</script>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img style="width: 100%" src="{{ secure_asset('img/slider-1-1.jpg') }}" alt="slider1">
    </div>
    <div class="item">
      <img style="width: 100%" src="{{ secure_asset('img/slider-2-2.jpg') }}" alt="slider2">
    </div>
    <div class="item">
      <img style="width: 100%" src="{{ secure_asset('img/slider-3-3.jpg') }}" alt="slider3">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<hr />

<div class="row">
<section class="col-sm-5" style="font-size: 1.2em;">
  <p><strong>ZeCoursier</strong>, une auto-entreprenariat est basée sur <strong>la livraison à domicile</strong> rapide de vos demandes que soient des marchandises, des medicaments, repats, documents...à Fès aussi à ses environs</p>
    <p>Zakaria Elmesoudy, le créateur de <strong>Zecoursier</strong> un jeune entrepreneur qui habite à la ville de Fes, motivé. J'ai toujours l'ambition de rendre mon service le plus bon possible, et de travailler sur les lacunes et les défauts afin de satisfaire nos clients.</p>
<img class="hidden-sm" src="{{ secure_asset('img/banner1.jpg') }}" style="width:100%;margin-bottom: 15px;" alt="banner1">
</section>
<aside class="col-sm-7">
    <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fzecoursier.officiel%2Fvideos%2F2588580877915913%2F&show_text=0&width=560" height="470" style="border:none;overflow:hidden; width: 100%" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
</aside>
<img class="visible-sm" src="{{ secure_asset('img/banner1.jpg') }}" style="width:100%" alt="banner1">    
</div>

<hr />

<div class="row">
    <h2 style="text-align: center;margin-bottom: 40px;color: rgb(172,172,172);">Ce qu'ils ont dit de notre service</h2>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img class="img-circle" width="100" src="{{ secure_asset('img/ahmed.jpg') }}" alt="ahmed">
      <div class="caption" style="text-align: center;">
        <h3>MORAD</h3>
        <p style="font-size: 1.2em;">Service au niveau requis, bonne chance</p>
        <p><a href="https://www.facebook.com/pg/zecoursier.officiel/reviews/?ref=page_internal" onclick="window.open(this.href); return false;" class="btn btn-social-icon btn-facebook" role="button"><span class="fa fa-facebook"></span></a></p>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img class="img-circle" width="100" src="{{ secure_asset('img/khadija.jpg') }}" alt="morad">
      <div class="caption" style="text-align: center;">
        <h3>KHADIJA</h3>
        <p style="font-size: 1.2em;">Vous avez un bon service dont tout le monde a besoin</p>
        <p><a href="https://www.facebook.com/pg/zecoursier.officiel/reviews/?ref=page_internal" onclick="window.open(this.href); return false;" class="btn btn-social-icon btn-facebook" role="button"><span class="fa fa-facebook"></span></a></p>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img class="img-circle" width="100" src="{{ secure_asset('img/said.jpg') }}" alt="morad">
      <div class="caption" style="text-align: center;">
        <h3>SAID</h3>
        <p style="font-size: 1.2em;">Bonne chance, notre merveilleuse équipe de ZeCoursier</p>
        <p><a href="https://www.facebook.com/pg/zecoursier.officiel/reviews/?ref=page_internal" onclick="window.open(this.href); return false;" class="btn btn-social-icon btn-facebook" role="button"><span class="fa fa-facebook"></span></a></p>
      </div>
    </div>
  </div>
</div>

<hr />

<div class="row">
    <h2 style="text-align: center;margin-bottom: 30px;color: rgb(172,172,172);">Nos Clients</h2>
    <section class="col-sm-5">
        <div class="media">
  <div class="media-left">
      <img class="media-object" src="{{ secure_asset('img/client-1.jpg') }}" width="64" height="64" alt="Maakoul">
  </div>
  <div class="media-body">
    <h4 class="media-heading">Maakoul</h4>
    Un E-commercial
  </div>
</div>
<div class="media">
  <div class="media-left">
    <a href="https://hmizatmaroc.storeino.co/" onclick="window.open(this.href); return false;">
      <img class="media-object" src="{{ secure_asset('img/client-2.jpg') }}" width="64" height="64" alt="Hmizat Maroc">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Hmizat Maroc</h4>
    https://hmizatmaroc.storeino.co/
  </div>
</div>
<div class="media">
  <div class="media-left">
    <a href="https://www.facebook.com/HasniPromotion" onclick="window.open(this.href); return false;">
      <img class="media-object" src="{{ secure_asset('img/client-3.jpg') }}" width="64" height="64" alt="Hasni">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Hasni Promotion</h4>
    <a href="https://www.facebook.com/HasniPromotion">https://www.facebook.com/HasniPromotion</a>
  </div>
</div>
    </section>
    <aside class="col-sm-7">
        <img src="{{ secure_asset('img/banner2.jpg') }}" style="width: 100%" height="230" alt="banner2">
    </aside>
   </div> 
</div>

@endsection