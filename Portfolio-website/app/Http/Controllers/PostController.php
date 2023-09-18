<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.dashboard", [
            "title" => "Dashboard",
            "posts" => Post::with("category")->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.create", [
            "title" => "Create Post",
            "category" => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "title" => "required",
            "image" => "required|image",
            "category_id" => "required",
            "body" => "required"
        ]);

        $validate["image"] = $request->file("image")->store("post-image");

        $validate["slug"] = strtolower(trim(preg_replace('/[^a-z0-9]+/', '-', $validate["title"]), '-'));

        Post::create($validate);

        return redirect()->intended("/posts");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view("dashboard.edit", [
            "post" => $post,
            "title" => "Edit Post",
            "category" => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validate = $request->validate([
            "title" => "required",
            "image" => "required|image",
            "category_id" => "required",
            "body" => "required"
        ]);

        $validate["image"] = $request->file("image")->store("post-image");

        $validate["slug"] = strtolower(trim(preg_replace('/[^a-z0-9]+/', '-', $validate["title"]), '-'));

        Post::where("id", $post->id)->update($validate);

        return redirect()->intended("/posts");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect()->intended("/posts");
    }
}
