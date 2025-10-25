<?php

namespace App\Http\Controllers;

use App\Models\Curry;
use Illuminate\Http\Request;

class EachCurry extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('eachCurry.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $curry=new Curry();
        $data=$request->validate([
            'name'=>'required|string|max:255',
            'description'=>'required|string',
            'price'=>'required|numeric',
            'category'=>'required|string|max:255',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($request->hasFile('image')){
            $imageName=time().'.'.$request->image->extension();
            $request->image->move(public_path('images'),$imageName);
            $data['image']=$imageName;
        }

        $curry->name=$data['name'];
        $curry->description=$data['description'];
        $curry->price=$data['price'];
        $curry->category=$data['category'];
        $curry->image=$data['image'];
        $curry->save();
        if(!$curry->save()){
    dd('Failed to save curry');
}

        return redirect()->route('dashboard')->with('success','Item added successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $curry = Curry::findOrFail($id);
        $curry->delete();
        return redirect()->route('dashboard')->with('success', 'Item deleted successfully');
    }
}
