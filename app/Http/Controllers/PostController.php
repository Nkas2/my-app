<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::active()->get();
        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title = strtoupper($request->input("tittle"));
        $content = $request->input("content");

        DB::table('posts')->insert([
            'title'         => $title,
            'content'       => $content,
            'created_at'    => date("Y-m-d H:i:s"),
            'updated_at'    => date("Y-m-d H:i:s"),
        ]);

        return redirect('posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::where('id', $id)->first();
        
        $data_view = [
            'post' => $post,
        ];
        return view('posts.show', $data_view);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::where('id', $id)->first();
        return view('posts.edit', [ "post" => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $title = strtoupper($request->input("tittle"));
        $content = $request->input("content");
        $updated_at = date("Y-m-d H:i:s");

        Post::where("id", $id)->update([
                "title" => $title,
                "content" => $content,
                "updated_at" => $updated_at,
        ]);

        return redirect("posts/$id");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::where("id", $id)->delete();
        return redirect('posts');
    }
}