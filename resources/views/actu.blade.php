@extends('layout')




@section('content')

<div class="container">

	<div class="row">
		@foreach($goodActu as $afficheInfo)
		<div class="col s4">
			
			<div class="card">
        <div class="card-image">
          <img src="{{ asset($afficheInfo->image)}}">
          <h5 class="card-title">{{ $afficheInfo->titre }}</h5>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <p>{{ $afficheInfo->texte }}</p>
        </div>
      </div>

		</div>
		@endforeach
	</div>
	
</div>



<form action="#">
    <p>
      <label>
        <input type="checkbox" />
        <span>Red</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" checked="checked" />
        <span>Yellow</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" class="filled-in" checked="checked" />
        <span>Filled in</span>
      </label>
    </p>
    <p>
      <label>
        <input id="indeterminate-checkbox" type="checkbox" />
        <span>Indeterminate Style</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" checked="checked" disabled="disabled" />
        <span>Green</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" disabled="disabled" />
        <span>Brown</span>
      </label>
    </p>
  </form>

@endsection