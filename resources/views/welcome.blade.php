@extends('layouts.menu')

@section('content')
<script type="text/javascript"> 
document.getElementById('accueil').className = "active";
</script>
<div class="row">
<section class="col-sm-5" style="font-size: 1.2em;">
    <p>Je m'appèle Zakaria Elmesoudy, un jeune entrepreneur qui habite à la ville de Fes, motivé. J'ai toujours l'ambition de rendre mon service le plus bon possible, et de travailler sur les lacunes et les défauts afin de satisfaire nos clients.</p>
<p>Je suis le créateur de <strong>ZeCoursier</strong>, une auto-entreprenariat est basée sur <strong>la livraison à domicile</strong> rapide de vos demandes que soient des marchandises, des medicaments, repats, documents...à Fès aussi à ses environs</p>
<img class="hidden-sm" src="{{ asset('img/pub1.jpg') }}" style="width:100%;margin-bottom: 15px;" alt="pub1">
</section>
<aside class="col-sm-7">
    <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fzecoursier.officiel%2Fvideos%2F2588580877915913%2F&show_text=0&width=560" height="420" style="border:none;overflow:hidden; width: 100%" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
</aside>
<img class="visible-sm" src="{{ asset('img/pub1.jpg') }}" style="width:100%" alt="pub1">    
</div>
<hr />
<div class="row">
    <h2 style="text-align: center;margin-bottom: 40px;color: rgb(172,172,172);">Ce qu'ils ont dit de notre service</h2>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img class="img-circle" width="100" src="{{ asset('img/morad.jpg') }}" alt="morad">
      <div class="caption" style="text-align: center;">
        <h3>MORAD</h3>
        <p style="font-size: 1.2em;">Merci pour la bonne affaire et la bonne livraison</p>
        <p><a href="https://www.facebook.com/pg/zecoursier.officiel/reviews/?ref=page_internal" onclick="window.open(this.href); return false;" class="btn btn-social-icon btn-facebook" role="button"><span class="fa fa-facebook"></span></a></p>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img class="img-circle" width="100" src="{{ asset('img/khadija.jpg') }}" alt="morad">
      <div class="caption" style="text-align: center;">
        <h3>KHADIJA</h3>
        <p style="font-size: 1.2em;">Vous avez un bon service dont tout le monde a besoin</p>
        <p><a href="https://www.facebook.com/pg/zecoursier.officiel/reviews/?ref=page_internal" onclick="window.open(this.href); return false;" class="btn btn-social-icon btn-facebook" role="button"><span class="fa fa-facebook"></span></a></p>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img class="img-circle" width="100" src="{{ asset('img/said.jpg') }}" alt="morad">
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
    <a href="#">
      <img class="media-object" src="{{ asset('img/logo1.png') }}" width="64" height="64" alt="logo1">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Total</h4>
    Station gasoil
  </div>
</div>
<div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" src="{{ asset('img/logo2.png') }}" width="64" height="64" alt="logo2">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Total</h4>
    Station gasoil
  </div>
</div>
<div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" src="{{ asset('img/logo3.jpg') }}" width="64" height="64" alt="logo3">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Total</h4>
    Station gasoil
  </div>
  <div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" src="{{ asset('img/logo4.png') }}" width="64" height="64" alt="logo4">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Total</h4>
    Station gasoil
  </div>
</div>
</div>
    </section>
    <aside class="col-sm-7">
        <img src="{{ asset('img/pub2.jpg') }}" alt="pub2" height="300" style="width: 100%;">
    </aside>
    
</div>

@endsection