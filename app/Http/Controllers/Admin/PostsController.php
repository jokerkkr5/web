<?php

namespace App\Http\Controllers\Admin;

use Session;
use App\Model\user\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index')->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            // 'category' => 'required',
            // 'status' => 'required',
            // 'image' => 'required',
            'body' => 'required',
            // 'tags' => 'required',
        ]);

        Post::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'slug' => $request->slug,
            // 'category' => ,
            // 'status' => ,
            // 'image' => ,
            'body' => $request->body,
            // 'tags' => ,
        ]);

        Session::flash('message', 'Created the post successfully!');

        return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('admin.posts.edit')->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            // 'category' => 'required',
            // 'status' => 'required',
            // 'image' => 'required',
            'body' => 'required',
            // 'tags' => 'required',
        ]);

        $post = Post::where('slug', $slug)->first();
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->save();

        Session::flash('success', 'Post Updated successfully.');

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);

        Session::flash('success', 'Post Deleted.');

        return redirect()->back();
    }
}
