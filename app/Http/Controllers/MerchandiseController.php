<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merchandise;

class MerchandiseController extends Controller
{
   public function index(){
    $merchandise = Merchandise:: orderBy('name')->limit(50)->get();
    return view('merchandise.index', ['merchandise' => $merchandise]);
   }

   public function create(){
      return view('merchandise.create');  
   }

   public function store(Request $request){
      $this ->validate($request, [
          'name' => 'required',
          'description'=> 'required',
          'quantity'=> 'required',
          'price'=> 'required',
      ]);

      Merchandise::create( [
          'name' => $request['name'],
          'description' => $request['description'],
          'quantity' => $request['quantity'],
          'price' => $request['price'],
      ]);

      return redirect('/merchandise')->with('info', 'Added a new Merchandise.');
  }

}
