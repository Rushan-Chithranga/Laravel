<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categoryModel;


class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = categoryModel::paginate(5);

        return view('manager.createCategory')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('manager.createNewCategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cat' => 'required',
        ]);

        $mod_cat = new categoryModel;
        $mod_cat->name = $request->cat;
        $mod_cat->save();


        $request->session()->flash('status', $request->cat.'Category Added!');

        return redirect('/manager/category');
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
    public function edit($id)
    {
        $category__SR = categoryModel::find($id);
        return view('manager.editCategory')->with('cat',$category__SR);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'cat' => 'required',
        ]);

        $mod_cat = categoryModel::find($id);
        $mod_cat->name = $request->cat;
        $mod_cat->save();

        $request->session()->flash('status', $request->cat.'Update Catregory!');

        return redirect('/manager/category');



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $c = categoryModel::find($id);
        $c -> delete();
        session()->flash('status','Category Deleted!');

        
        
        return redirect('/manager/category');
    }
}
