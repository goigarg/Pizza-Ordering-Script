<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;
use Illuminate\Support\Facades\Auth;


class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('pizza.index');
    }

    //admin area
    public function admin() {
        $pizzas = Pizza::orderBy('created_at', 'DESC')->where('status', '0')->get();
        $completed = Pizza::orderBy('created_at', 'DESC')->where('status', '1')->get();
        return view('pizza.admin')->with('pizzas', $pizzas)->with('completed', $completed);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pizza.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $pizza = new Pizza;
        $pizza->name = $request->post('name');
        $pizza->pizzatype = $request->post('pizzatype');
        $pizza->status = 0;
        $pizza->save();

        return redirect('/pizza')->with('msg', 'Thanks for Ordering');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::check()) {
            $pizza = Pizza::findOrFail($id);
            return view('pizza.show')->with('pizza', $pizza);
        } else {
            return redirect('/login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $pizza = Pizza::findOrFail($id);
        $pizza->status = 1;
        $pizza->save();
        return redirect('/pizza/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        /*
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        return redirect('/pizza/admin')->with('msg', 'Order Deleted Sucessfully');    
        */
    }
}