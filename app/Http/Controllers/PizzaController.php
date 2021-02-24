<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        // get data from a database
        // $pizzas = [
        //     ['type' => 'hawaiian', 'base' => 'cheesy crust'],
        //     ['type' => 'volcano', 'base' => 'garlic crust'],
        //     ['type' => 'veg supreme', 'base' => 'thin & crispy']
        // ];

        //Get all the data
        // $pizzas = Pizza::all();

        // //Get pizzas by ording in name
        // $pizzas = Pizza::orderBy('name')->get();

        $pizzas = Pizza::where('type', 'huwaian')->get();
        $pizzas = Pizza::latest()->get();


        return view('pizzas.index', [
            'pizzas' => $pizzas,
        ]);
    }

    public function show($id)
    {
        // use the $id variable to query the db for a record
        // $pizza = Pizza::find($id);
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create()
    {
        return view('pizzas.create');
    }

    public function store()
    {
        // error_log(request('name'));
        // error_log(request('type'));
        // error_log(request('base'));

        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        // return request('toppings');

        $pizza->save();

        // error_log($pizza);
        return redirect('/')->with('mssg', 'Thanks for your order');
    }

    public function destroy($id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        return redirect('/pizzas');
    }
}
