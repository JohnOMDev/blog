<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
class CategoryController extends Controller
{
    function index() 
    {
    	$categories = Category::all();
    	// dd($categories);
    	return view('categories.index', compact('categories'));
    }

        function create()
        {
        	return view('categories.create');
    }

        function store(Request $request)
        {
    	// dd($request->name);
    	$category = new Category();
    	// new model
    	$category->name = $request->name;
    	// db=field
    	$category-> save();  
    	// save
    	// return redirect()->back();
    	// redirect
    	return redirect('categories');
    }

    function edit($id)
    {
           $category = category::where('id', $id)->first();
           return view('category.edit', compact('categories'));
            }

    function update(Request $request, $id)
    {
       $category = category::findorFail($id);
        $category->name = $request->name;
           $category-> save();
            return redirect('categories');
            }

     function delete($id)
    {
        $category = Category::findorFail($id);
        return view('category.delete', compact('categories'));
    }
    
    function destroy(Request $request, $id)
    {
        $category = category::findorFail($id);
        $category->name = $request->name;
        $category->delete();
        // \Session::flash('flash_message','Post Successfully deleted!');
        return redirect('posts');
            }
}
