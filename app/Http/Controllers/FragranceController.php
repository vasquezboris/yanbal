<?php

namespace Proyecto\Http\Controllers;

  use Proyecto\Fragrance;
use Illuminate\Http\Request;

class FragranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $fragrances = Fragrance::all();
         return view('fragrances.index',compact('fragrances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('fragrances.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if ($request->hasFile('avatar')) {
            $file =$request->file('avatar');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
           
        }
        $fragrance =new Fragrance();
        $fragrance->name=$request->input('name');
        $fragrance->price=$request->input('price');
        $fragrance->tone=$request->input('type');
        $fragrance->slug=$request->input('slug');
        $fragrance->description=$request->input('description');
        $fragrance->avatar= $name;
        $fragrance->save();
        return 'save';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Fragrance $fragrance)
    {
         return view('fragrances.show',compact('fragrance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Fragrance $fragrance)
    {
        return view('fragrance.edit', compact('fragrance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fragrance $fragrance)
    {
         $gragrance->fill($request->except('avatar'));
       if ($request->hasFile('avatar')) {
            $file =$request->file('avatar');
            $name=time().$file->getClientOriginalName();
            $makeup->avatar=$name;
            $file->move(public_path().'/images/',$name);
           
        }
       $gragrance->save();

       return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
