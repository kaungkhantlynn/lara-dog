<?php

namespace App\Http\Controllers;

use App\Dog;
use App\DogType;
use Illuminate\Http\Request;

use League\Fractal\Manager;
use League\Fractal\Resource\Collection;


class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // $dog = Dog::findAge(9);
        // dd($dog);
        $dog = Dog::find($id);
        
        // dd($dog->dogtype->type);
        $dogType = DogType::find(24);
        // dd($dogType->dogs);

        // dd($dog->dogtype->dogs);
        return response()->json($dog->dogtype->dogs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function edit(Dog $dog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dog $dog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dog $dog)
    {
        //
    }

    public function dogfractal()
    {
        $fractal = new Manager();
        $dogs = Dog::all();
        $resource = new Collection($dogs->toArray(), function(array $dog) {
            return [
                'id'      => (int) $dog['id'],
                'name'   => $dog['name'],
                'dog_type'    => $dog['dogtype']['type'],
              
            ];
        });

        return $fractal->createData($resource)->toJson();
    }
}
