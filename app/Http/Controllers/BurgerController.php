<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Burger;

class BurgerController extends Controller

{

    public function index() {

        $burgers = Burger::latest()->get();      

        return view('burgers.index', [
            'burgers' => $burgers,
        ]);
    }


    public function show($id) {

        $burger = Burger::findOrFail($id);

        return view('burgers.show', ['burger' => $burger]);
    }


    public function create() {

        return view('burgers.create');

    }


    public function destroy($id) {

        $burger = Burger::findOrFail($id);
        $burger->delete();

        return redirect('/burgers');

    }


    public function store() {

        $burger = new Burger();
    
        $burger->name = request('name');
        $burger->bread = request('bread');
        $burger->base = request('base');
        $burger->toppings = request('toppings');
        $burger->sauce = request('sauce');
    
        $burger->save();
    
        return redirect('/')->with('mssg', 'Thanks for your order!');
    
      }
      
}
