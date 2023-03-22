<?php

namespace App\Http\Controllers;

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
        $posts = DB::table('posts')
                    ->select('title', 'content', 'id', 'updated_at')
                    ->where('active', true)
                    ->get();
        $view_data = [
            "posts" => $posts,
        ];
        return view('posts.index', $view_data);
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
        $post = DB::table('posts')
                    ->where('id', $id)
                    ->first();
        // dd($post);
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
        $post = DB::table('posts')
                    ->where('id', $id)
                    ->select("title", "content", "id")
                    ->first();
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

        DB::table("posts")
            ->where("id", $id)
            ->update([
                "title" => $title,
                "content" => $content,
                "updated_at" => $updated_at,
        ]);

        return redirect('posts');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('posts')->where("id", $id)->delete();
        return redirect('posts');
    }
}