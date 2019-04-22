@extends('layout')

@section('content')

<div class="container">
<div class="news center">
      <h1>FORMULAIRE</h1>
    </div>
</div>


<div class='container  bigForm'>
  <div class="row col s12 m6 l6 xl4">

      <div class='joueurcheck'>
      <h5>Cochez les joueurs present:</h5>
      <form action="#">
          <p>
            <label>
              <input type="checkbox" />
              <span>Jean-Philippe</span>
            </label>
          </p>
          <select class="browser-default">
            <option value="" disabled selected>Nombre de buts</option>
            <option value="1"> 1</option>
            <option value="2"> 2</option>
            <option value="3"> 3</option>
            <option value="4"> 4</option>
            <option value="5"> 5</option>
            <option value="6"> 6</option>
          </select>
        </form>
      <form action="#">
        <p>
          <label>
            <input type="checkbox" />
            <span>Olivier</span>
          </label>
        </p>
        <select class="browser-default">
          <option value="" disabled selected>Nombre de buts</option>
          <option value="1"> 1</option>
          <option value="2"> 2</option>
          <option value="3"> 3</option>
          <option value="4"> 4</option>
          <option value="5"> 5</option>
          <option value="6"> 6</option>
        </select>
      </form>
      <form action="#">
        <p>
          <label>
            <input type="checkbox" />
            <span>Arnaud</span>
          </label>
        </p>
        <select class="browser-default">
          <option value="" disabled selected>Nombre de buts</option>
          <option value="1"> 1</option>
          <option value="2"> 2</option>
          <option value="3"> 3</option>
          <option value="4"> 4</option>
          <option value="5"> 5</option>
          <option value="6"> 6</option>
        </select>
      </form>
      <form action="#">
        <p>
          <label>
            <input type="checkbox" />
            <span>Antoine</span>
          </label>
        </p>
        <select class="browser-default">
          <option value="" disabled selected>Nombre de buts</option>
          <option value="1"> 1</option>
          <option value="2"> 2</option>
          <option value="3"> 3</option>
          <option value="4"> 4</option>
          <option value="5"> 5</option>
          <option value="6"> 6</option>
        </select>
      </form>
      <form action="#">
        <p>
          <label>
            <input type="checkbox" />
            <span>Loïc</span>
          </label>
        </p>
        <select class="browser-default">
          <option value="" disabled selected>Nombre de buts</option>
          <option value="1"> 1</option>
          <option value="2"> 2</option>
          <option value="3"> 3</option>
          <option value="4"> 4</option>
          <option value="5"> 5</option>
          <option value="6"> 6</option>
        </select>
      </form>
      <form action="#">
        <p>
          <label>
            <input type="checkbox" />
            <span>Mich</span>
          </label>
        </p>
        <select class="browser-default">
          <option value="" disabled selected>Nombre de buts</option>
          <option value="1"> 1</option>
          <option value="2"> 2</option>
          <option value="3"> 3</option>
          <option value="4"> 4</option>
          <option value="5"> 5</option>
          <option value="6"> 6</option>
        </select>
      </form>
      <form action="#">
        <p>
          <label>
            <input type="checkbox" />
            <span>Clement</span>
          </label>
        </p>
        <select class="browser-default">
          <option value="" disabled selected>Nombre de buts</option>
          <option value="1"> 1</option>
          <option value="2"> 2</option>
          <option value="3"> 3</option>
          <option value="4"> 4</option>
          <option value="5"> 5</option>
          <option value="6"> 6</option>
        </select>
      </form>
      <form action="#">
        <p>
          <label>
            <input type="checkbox" />
            <span>Guillaume</span>
          </label>
        </p>
        <select class="browser-default">
          <option value="" disabled selected>Nombre de buts</option>
          <option value="1"> 1</option>
          <option value="2"> 2</option>
          <option value="3"> 3</option>
          <option value="4"> 4</option>
          <option value="5"> 5</option>
          <option value="6"> 6</option>
        </select>
      </form>
      <form action="#">
        <p>
          <label>
            <input type="checkbox" />
            <span>Mathieu</span>
          </label>
        </p>
        <select class="browser-default">
          <option value="" disabled selected>Nombre de buts</option>
          <option value="1"> 1</option>
          <option value="2"> 2</option>
          <option value="3"> 3</option>
          <option value="4"> 4</option>
          <option value="5"> 5</option>
          <option value="6"> 6</option>
        </select>
      </form>
      <form action="#">
        <p>
          <label>
            <input type="checkbox" />
            <span>Sébastien</span>
          </label>
        </p>
        <select class="browser-default">
          <option value="" disabled selected>Nombre de buts</option>
          <option value="1"> 1</option>
          <option value="2"> 2</option>
          <option value="3"> 3</option>
          <option value="4"> 4</option>
          <option value="5"> 5</option>
          <option value="6"> 6</option>
        </select>
      </form>
      <form action="#">
        <p>
          <label>
            <input type="checkbox" />
            <span>Martin</span>
          </label>
        </p>
        <select class="browser-default">
          <option value="" disabled selected>Nombre de buts</option>
          <option value="1"> 1</option>
          <option value="2"> 2</option>
          <option value="3"> 3</option>
          <option value="4"> 4</option>
          <option value="5"> 5</option>
          <option value="6"> 6</option>
        </select>
      </form>
     </div>

</div>


  <div class="row row2 col s12 m6 l6 xl4">
    <div class="matchcheck">

      <h5>Resultat du match:</h5>
      <p>BABET :</p>
            <div class="bab input-field col s6">
              <input id="input_text" type="text" data-length="10">
              <label for="input_text">Score Babet</label>
            </div>

     <form action="#">

        <select class="browser-default">
          <option value="" disabled selected>Adversaire</option>
          <option value="1"> Les Forges</option>
          <option value="2"> Leroy Merlin</option>
          <option value="3"> Bandas ventre jaune</option>
          <option value="4"> Family FC</option>
          <option value="5"> CSADN 2</option>
          <option value="6"> FC Ferkla</option>
          <option value="7"> FC LPM42</option>
          <option value="8"> Helvet Farmer</option>
          <option value="9"> Vivacité 1</option>

        </select>
      </form>
              <div class="adv input-field col s6">
                <input id="input_text" type="text" data-length="10">
                <label for="input_text">Score Adversaire</label>
              </div>
    </div>
  </div>


          <div class"bouton_sub">
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
             <i class="material-icons right">send</i>
            </button>
         </div>
</div>







@endsection
