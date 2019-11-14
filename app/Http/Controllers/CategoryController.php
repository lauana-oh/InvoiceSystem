<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('category.index', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'name' => 'required | min:3',
            'description' => 'required | min: 5',
            'iva' => 'numeric'
        ]);
        
        $category = new Category();
        $category->name = $validData['name'];
        $category->description = $validData['description'];
        $category->iva = $validData['iva'];
        $category->save();
        
        return redirect('/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit', [
            'category' => $category
        ]);
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
        $category = Category::find($id);
        $validData = $request->validate([
            'name' => 'required | min:3',
            'description' => 'required | min: 5',
            'iva' => 'numeric'
        ]);
    
        $category->name = $validData['name'];
        $category->description = $validData['description'];
        $category->iva = $validData['iva'];
        $category->save();
        
        return redirect('/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //$cat = Category::find($category);
        $category->delete();
        return redirect('/categories');
    }
    
    public function confirmDelete($id)
    {
        $category = Category::find($id);
        return view('category.confirmDelete', [
            'category' => $category
        ]);
    }
}
