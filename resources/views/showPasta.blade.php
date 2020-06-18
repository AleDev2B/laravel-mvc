@extends('layouts.mainLayout')

@section ('content')
  <div class="content">
    <p>Questo e' il contenuto della scheda contenuti che si prende l'id: {{$card['titolo']}}del link cliccato nella home</p>
  </div>
@endsection
