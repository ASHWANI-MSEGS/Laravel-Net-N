<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pizza;
class PizzaController extends Controller
{
public function welcome(){
    return view('pizzas.welcome');
}


    public function index(){
        // $pizzas = Pizza::all();
        //$pizzas = Pizza::orderBy('name')->get();// get() is always required if all() is not being used
        $pizzas = Pizza::where('type','hawaiian')->get();
        return view('pizzas.index', ['pizzas'=> $pizzas]);
    }
public function show($id){
    $pizzafind = Pizza::findOrFail($id);
    return view('pizzas.show',['pizza'=> $pizzafind]);
}
public function create(){
    return view('pizzas.create');
}

public function store(){
    //here we are making the instance of the model to eventually store the data 
    $pizza = new Pizza( );
    $pizza -> name = request('name');
    $pizza -> base = request('base');
    $pizza -> type = request('type');

// error_log($pizza);// this is to see in terminal what data is being pass by us

// here its gonna be saved
$pizza -> save();
// we cannot just add a second parameter like we added in return viw('viewname', 'another parameter(like an array of data)');
// so we will use a method called with .. and it willl chain to the redirect and send a message
// ->with('key', 'value') like a session data .
    return redirect('/home')->with('msg','Your order has been placed');
}


} 
