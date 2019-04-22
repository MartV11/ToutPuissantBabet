@extends('layout')
@section('content')
<div class='container  bigForm'>

    <div class="row col s12 m6 l6 xl4">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <input  id="titre" type="text" class="validate">
              <label for="titre">Gros titre</label>
            </div>
            <div class="input-field col s6">
              <input  id="date" type="text" class="validate">
              <label for="date">date:   ../../....</label>
            </div>
          </div>

          <div class="row">
               <div class="file-field input-field">
                 <div class="btn">
                   <span>Photo</span>
                   <input type="file">
                 </div>
                 <div class="file-path-wrapper">
                   <input class="file-path validate" type="text">
                 </div>
               </div>
          </div>
          <div class="row">
           <div class="input-field col s12">
             <textarea id="article" class="materialize-textarea" data-length="250"></textarea>
             <label for="article">Rédige l'article</label>
           </div>
         </div>

        </form>
      </div>
          <div class"bouton_sub">
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
             <i class="material-icons right">send</i>
            </button>
         </div>
</div>


@endsection
