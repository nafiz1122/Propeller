<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.addBlog',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $validatedData = $request->validate([
            'blog_title' => 'required|min:2',
            'blog_short_details' => 'required|min:2',
            'blog_long_details' => 'required|min:2',
            'about_image' => 'image|mimes:jpeg,jpg,png',
        ]);
        $blog = new Blog;
        $blog->blog_title           =$request->input('blog_title');
        $blog->blog_short_details   =$request->input('blog_short_details');
        $blog->blog_long_details    =$request->input('blog_long_details');

        //image upload
		$upload_image = $request->hasFile('blog_image');
		if ($upload_image){
        $image = $request->file('blog_image');
        $x     ="abcdefghijklmnopqrstuvwxyz0123456789";
        $x     =str_shuffle($x);
        $x     =substr($x, 0, 6).".";
        $name  = time().$x.$image->getClientOriginalExtension();
        $destinationPath ='Admin_images/blog_images/';
        $image_url =$name;
        $success = $image->move($destinationPath, $name);
        $blog->blog_image = $image_url;
        $blog->save();
        return back()->with('message', 'Blog Successfully Added');
        }
        else{
            $blog->save();
            return back()->with('message', 'Blog Successfully Add Without Image ');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
