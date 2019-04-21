@extends('layout')
@section ('content')

<div class="container drag">


<div id="draggable1" class="ui-widget-content">
<p>JP</p>
</div>
<div id="draggable2" class="ui-widget-content">
<p>Oliv'</p>
</div>
<div id="draggable3" class="ui-widget-content">
<p>Arnaud</p>
</div>
<div id="draggable4" class="ui-widget-content">
<p>Antoine</p>
</div>
<div id="draggable5" class="ui-widget-content">
<p>Loïc</p>
</div>
<div id="draggable6" class="ui-widget-content">
<p>Mich</p>
</div>
<div id="draggable7" class="ui-widget-content">
<p>Clem</p>
</div>
<div id="draggable8" class="ui-widget-content">
<p>Guillaume</p>
</div>
<div id="draggable9" class="ui-widget-content">
<p>Mathieu</p>
</div>
<div id="draggable10" class="ui-widget-content">
<p>Sebastien</p>

</div>
<div id="draggable11" class="ui-widget-content">
<p>Martin</p>
</div>


</div>
<div class="lotoComp">



<body>
    <content>
        <h1><span class="rouge">L</span><span class="bleu">O</span><span class="rouge">T</span><span class="bleu">O</span></h1>
        <h2>Loto Compo</h2>
        <section id="sectionTirage"></section>
        <h2>Gardien de BUT</h2>
        <section id="sectionChance"></section>
    </content>

    <script src="loto.js"></script>
</body>


</div>

@endsection

@section('content')

<div class="container">
<div class="news center">
      <h1>COMPOSITION</h1>
    </div>
</div>

@endsection
