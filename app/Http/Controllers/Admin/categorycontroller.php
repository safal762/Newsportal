<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;

class categorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catogery= category::all();
        return view('admin.category.table',compact('catogery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $position= category::max('position')+1;
    return view('admin.category.form',compact('position'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|max:40|unique:categories,title',
            'position'=>'required|numeric|min:1',

        ]);
        $catogery=new category();
        $catogery->title=$request->title;
        $catogery->slug=str()->slug($request->title);
        $catogery->position=$request->position;
        $catogery->meta_keywords=$request->meta_keywords;
        $catogery->meta_description=$request->meta_description;
        $catogery->save();
        toast('catogery created sucessfully','success');
        return redirect()->route('admin.catogery.index');
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
        $edit_data= category::find($id);
        return view('admin.category.edit',compact('edit_data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
                $request->validate([
            'title'=>'required|max:40',
            'position'=>'required|numeric|min:1',

        ]);
        $catogery= category::find($id);
        $catogery->title=$request->title;
        $catogery->slug=str()->slug($request->title);
        $catogery->position=$request->position;
        $catogery->meta_keywords=$request->meta_keywords;
        $catogery->meta_description=$request->meta_description;
        $catogery->visible=$request->visible;
        $catogery->save();
        toast('catogery updated sucessfully','success');
        return redirect()->route('admin.catogery.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $catogery=category::find($id);
        $catogery->delete();
        toast('catogery deleted sucessfully','success');
        return redirect()->back();
    }
}
