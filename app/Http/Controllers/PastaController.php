<?php

namespace App\Http\Controllers;

use App\Pasta;

use Illuminate\Http\Request;

class PastaController extends Controller
{
  public function Index() {

    $cards = config('pasta');
    $collection = collect($cards)->map(function ($item, $key) {
      $item['id'] = $key;
      return $item ;
    });

    $lunga = $collection -> WHERE('tipo','lunga');
    $corta = $collection -> WHERE('tipo','corta');
    $cortissima = $collection -> WHERE('tipo','cortissima');

      return view('home',compact('lunga','corta','cortissima'));
  }

  public function ShowPasta($id) {
    $cards = config('pasta');
    $collection = collect($cards) ->map(function ($item, $key) {
      $item['id'] = $key;
      return $item ;
    });

    $card = $collection->where('id', $id)->first();

    return view('showPasta', compact('card'));
  }
}
