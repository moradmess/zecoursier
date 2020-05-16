@extends('layouts.menu')

@section('content')
<script type="text/javascript"> 
document.getElementById('service').className = "active";
</script>
	<img class="img-rounded img-responsive center-block" width="100%" src="{{ secure_asset('img/nos_service.jpg') }}" alt="A_propos">
	<!--<img class="img-rounded img-responsive center-block" width="100%" src="{{ asset('img/nos_service.jpg') }}" alt="A_propos">-->
	<hr />
	<div class="row" style="text-align: justify; text-align-last: center;font-size: 1.4em;margin-top: 20px">
		<p class="col-sm-6 col-sm-offset-3">Nos services sont caractérisés par la sécurité avec une culture de l'innovation visée sur la rapidité et l'excellence.<br />En plus vous garantissez une livraison de toute qualité, et donc vous n'enquête pas cher e-commercial d'essayer de rapprocher notre service <strong>ZeCoursier</strong>.</p>
	</div>
<hr />
<div class="row">
	<aside class="col-sm-4">
		<div class="panel panel-default" style="text-align: center;">
  		<div class="panel-heading"><span class="glyphicon glyphicon-check"></span> RAMASSAGE</div>
  		<div class="panel-body">
  			<img style="width: 50%" src="{{ secure_asset('img/ramassages.jpg') }}">
  			<!--<img style="width: 50%" src="{{ asset('img/ramassages.jpg') }}">-->
    	<p>ZeCoursier assure le service ramassage, nous pouvons déplacer chez vous dans n'importe quelle place à Fes et les environs afin de ramasser vos colis</p>
  		</div>
		</div>
	</aside>
	<aside class="col-sm-4">
		<div class="panel panel-default" style="text-align: center;">
  		<div class="panel-heading"><span class="glyphicon glyphicon-send"></span> LIVRAISON</div>
  		<div class="panel-body">
  		<img style="width: 50%" src="{{ secure_asset('img/livraisons.jpg') }}">
  		<!--<img style="width: 50%" src="{{ asset('img/livraisons.jpg') }}">-->
    	<p>ZeCoursier est à la disposition de tous les e-commerciaux, 24h/24 et 7j/7 pour livrer tous ce que vous voulez dans Fès et les environs</p>
  		</div>
		</div>
	</aside>
	<aside class="col-sm-4">
		<div class="panel panel-default" style="text-align: center;">
  		<div class="panel-heading"><span class="glyphicon glyphicon-pencil"></span> SUIVI</div>
  		<div class="panel-body">
  		<img style="width: 50%" src="{{ secure_asset('img/suivi.jpg') }}">
  		<!--<img style="width: 50%" src="{{ asset('img/suivi.jpg') }}">-->
    	<p>Au cas où un client ne répondent pas, nous l'envoyons un SMS dans lequel nous informons que son colis est présent dans le délai de 72 heures</p>
  		</div>
		</div>
	</aside>
</div>

@endsection
