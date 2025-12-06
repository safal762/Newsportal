<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\article;
use App\Models\category;
use Illuminate\Http\Request;

class articlecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articaldata=article::all();
        return view('admin.article.table',compact('articaldata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $catogery=category::all();
        return view('admin.article.form',compact('catogery'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'title'=>'required|max:40|unique:articles,title',

        ]);
    $article=new article();
    $article->title=$request->title;
    $article->slug=str()->slug($request->title);
    $article->meta_keywords=$request->meta_keywords;
    $article->title_description=$request->title_description;
    $article->description=$request->description;
    $article->writer_name=$request->writer_name;
    $image=$request->image;
    if($image){
        $file_name=time().'.'.$image->getClientOriginalExtension()
;
        $image->move('/images',$file_name);
        $article->image= "/images.$file_name";
    }
    $article->save();
    $article->categories()->attach($request->catogery);
    toast('article published sucessfully','success');
    return redirect()->route('admin.artical.index');

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
       
       
       $article = Article::find($id);
        $catogery = Category::all();
       return view('admin.article.edit',compact('article','catogery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            $request->validate([
            'title'=>'required|max:40',
        ]);
        $article= article::find($id);
    $article->title=$request->title;
    $article->slug=str()->slug($request->title);
    $article->meta_keywords=$request->meta_keywords;
    $article->title_description=$request->title_description;
    $article->description=$request->description;
      $article->visible=$request->visible;
        $article->trending=$request->trending;
    $article->writer_name=$request->writer_name;
    $image=$request->image;
    if($image){
        $file_name=time().'.'.$image->getClientOriginalExtension()
;
        $image->move('/images',$file_name);
        $article->image= "/images.$file_name";
    }
    $article->save();
      $article->categories()->sync($request->catogery);
    toast('article updated sucessfully','success');
    return redirect()->route('admin.artical.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $catogery=article::find($id);
        $catogery->delete();
        toast('article deleted sucessfully','success');
        return redirect()->back();
    }
}
