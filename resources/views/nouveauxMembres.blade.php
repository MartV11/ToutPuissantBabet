@extends('layout')
@section('content')
<div class='container  bigForm'>

    <div class="row col s12 m6 l6 xl4">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <input  id="first_name" type="text" class="validate">
              <label for="first_name">Prenom</label>
            </div>
            <div class="input-field col s6">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Nom</label>
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
            <div class="input-field col s6">
              <input id="taille" type="text" class="validate">
              <label for="taille">Taille</label>
            </div>
            <div class="input-field col s6">
              <input id="poids" type="text" class="validate">
              <label for="poids">Poids</label>
            </div>
            <div class="input-field col s6">
              <input id="pied" type="text" class="validate">
              <label for="pied">Pied</label>
            </div>
            <div class="input-field col s6">
              <input id="poste" type="text" class="validate">
              <label for="poste">Poste</label>
            </div>
          </div>
          <div class="row">
           <div class="input-field col s12">
             <textarea id="description" class="materialize-textarea" data-length="250"></textarea>
             <label for="description">Description du champion</label>
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
