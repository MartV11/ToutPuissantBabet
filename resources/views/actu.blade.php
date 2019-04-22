@extends('layout')




@section('content')
<div class="container">
<div class="news center">
      <h1>ACTUALITE</h1>
    </div>
</div>
<div class="">

	<div class="row">
		@foreach($goodActu as $afficheInfo)
		<div class="col s12 m6 l4 xl4">
			
			<div class="card hoverable">
        <div class="card-image">
          <div class="divider"></div>
          <img class="resize" src="{{ asset($afficheInfo->image)}}">
          <h5 class="card-title little-title">{{ $afficheInfo->titre }}</h5>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content little-actu">
          <p>{{ $afficheInfo->texte }}</p>
        </div>
      </div>

		</div>
		@endforeach
	</div>
	
</div>


@endsection