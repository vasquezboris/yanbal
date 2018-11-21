<?php

namespace Proyecto\Http\Controllers;
   
   use Proyecto\Makeup;
use Illuminate\Http\Request;

class MakeupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makeups = Makeup::all();
         return view('makeups.index',compact('makeups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('makeups.create');
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
        $makeup =new Makeup();
        $makeup->name=$request->input('name');
        $makeup->price=$request->input('price');
        $makeup->tone=$request->input('tone');
        $makeup->slug=$request->input('slug');
        $makeup->description=$request->input('description');
        $makeup->avatar= $name;
        $makeup->save();
        return 'save';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Makeup $makeup)
    {
        return view('makeups.show',compact('makeup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Makeup $makeup)
    {
        return view('makeups.edit', compact('makeup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Makeup $makeup)
    {

       $makeup->fill($request->except('avatar'));
       if ($request->hasFile('avatar')) {
            $file =$request->file('avatar');
            $name=time().$file->getClientOriginalName();
            $makeup->avatar=$name;
            $file->move(public_path().'/images/',$name);
           
        }
       $makeup->save();

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
