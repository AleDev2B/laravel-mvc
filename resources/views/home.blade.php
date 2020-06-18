@extends('layouts.mainLayout')

@section ('content')
  <div class="content">
    <h2>Pasta Lunga:</h2>
    <ul>
        @foreach ($lunga as $card)
          <li>
          <img src="{{ $card['src'] }}" alt="immagine formato pasta">
          </li>
          <li>{{$card['id']}}
            <a href="{{route('showPasta', $card['id'])}}">{{ $card['titolo'] }}</a>
          </li>
          <li>
          {{ $card['descrizione'] }}
          </li>
        @endforeach
    </ul>

    <h2>Pasta Corta:</h2>
    <ul>
        @foreach ($corta as $card)
          <li>
          <img src="{{ $card['src'] }}" alt="immagine formato pasta">
          </li>
          <li>
            <a href="{{route('showPasta', $card['id'])}}">{{ $card['titolo'] }}</a>
          </li>
          <li>
          {{ $card['descrizione'] }}
          </li>
        @endforeach
    </ul>

    <h2>Pasta Cortissima:</h2>
    <ul>
        @foreach ($cortissima as $card)
          <li>
          <img src="{{ $card['src'] }}" alt="immagine formato pasta">
          </li>
          <li>
            <a href="{{route('showPasta', $card['id'])}}">{{ $card['titolo'] }}</a>
          </li>
          <li>
          {{ $card['descrizione'] }}
          </li>
        @endforeach
    </ul>
  </div>
@endsection
