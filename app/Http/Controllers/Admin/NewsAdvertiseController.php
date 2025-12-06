<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advertise;
use Illuminate\Http\Request;

class NewsAdvertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advertise=Advertise::all();
        return view('admin.advertise.table',compact('advertise'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.advertise.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $advertise=new Advertise();
        $advertise->redirect_link=$request->redirect_link;
        $advertise->expire_date=$request->expire_date;
        $advertise->company_name=$request->compony_name;
        $advertise->contact=$request->contact;
        // $advertise->ad_position=$request->adposition;
        $image=$request->image;
        if($image){
            $file_name=time().'.'.$image->getClientOriginalExtension();
            $image->move('images/',$file_name);
            $advertise->image="images/.$file_name";
        }
        $advertise->save();
        toast('advertise created sucessfully','success');
        return redirect()->route('admin.advertise.index');
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
        $advertise=Advertise::find($id);
        return view('admin.advertise.edit',compact('advertise'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $advertise=Advertise::find($id);
        $advertise->redirect_link=$request->redirect_link;
        $advertise->expire_date=$request->expire_date;
        $advertise->company_name=$request->compony_name;
        $advertise->contact=$request->contact;
        // $advertise->ad_position=$request->adposition;
        $image=$request->image;
        if($image){
            $file_name=time().'.'.$image->getClientOriginalExtension();
            $image->move('images/',$file_name);
            $advertise->image="images/.$file_name";
        }
        $advertise->save();
        toast('advertise updated sucessfully','success');
        return redirect()->route('admin.advertise.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $advertise=Advertise::find($id);
        $advertise->delete();
        toast('advertise deleted sucessfully','success');
        return redirect()->back();
    }
}
