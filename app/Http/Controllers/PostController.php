<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Category;
class PostController extends Controller
{
    function __construct(){
        $this->middleware('auth', ['only'=>['delete', 'edit', 'create']]);
    }
    function index() 
    {
    	$posts= Post::all();
        // retrieve it from the database and send it to the view
    	return view('posts.index', compact('posts'));

    }
    function create()
    {
        $categories = Category::all();
    	return view('posts.create', compact('categories'));
    }

    function store(Request $request)
    {
    	// dd($request->name);
    	$post = new Post();
    	// new model
    	$post->title = $request->title;
    	$post->body = $request->body;
        $post->category_id = $request->category_id;

    	// db=field
    	$post->save();  
    	// save
    	// return redirect()->back();
    	// redirect

        // $post->save($request->all());
        // $post = Post::create($request->all());
     //    // $post->save();
    	return redirect('posts');
    }
     function edit($id)
    {
        // $post = Post::findorFail($id);
         $categories = Category::all();
        $post = Post::where('id', $id)->first();
        return view('posts.edit', compact('post','categories'));
    }
      function update(Request $request, $id)
    {
        // $post = Post::where('id', $id)->update($request->all());
        $post = post::findorFail($id);
        $post->title = $request->title;
        $post->body =$request->body;
        $post->category_id = $request->category_id;
        $post->save();
        return redirect('posts');
    }



    function show($id)
    {
        $post = Post::where('id', $id)->first();
        return view('posts.show', compact('post'));
    }
    // // // public function destroy(Post $post)
    // // // {
    // // //     post::destroy ($id);
    // //     return $post->delete();
    // }

    function delete($id)
    {
        $post = Post::findorFail($id);
        return view('posts.delete', compact('post'));
    }
    function destroy(Request $request, $id)
    {
        $post = post::findorFail($id);
        $post->title = $request->title;
        $post->body =$request->body;
        $post->delete();
        // /Session::flash('flash_message','Post Successfully deleted!');
        return redirect('posts');
    }
}
