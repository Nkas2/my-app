<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Storage::get('posts.txt');
        $posts = explode("\n", $posts);
        $arr = [];
        foreach ($posts as $key ) {
            $arr[] = explode(",", $key);
        }
        $posts = $arr;

        $data_view = [
            'posts' => $posts,
        ];
        
        return view('posts.index', $data_view);
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
        $title = $request->input("tittle");
        $content = $request->input("content");

        $posts = Storage::get('posts.txt');
        $posts = explode("\n", $posts);

        $new_post = [
            count($posts) + 1,
            $title,
            $content,
            date('Y-m-d H:i:s'),
        ];

        $posts[] = implode(",", $new_post);
        $posts = implode("\n", $posts);

        Storage::write('posts.txt', $posts);

        return redirect('posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts =  Storage::get('posts.txt');
        $posts = explode("\n", $posts);
        $post = [];
        $arr = [];
        foreach ($posts as $key ) {
            $arr = explode(",", $key);
            if($arr[0] == $id){
                $post = $arr;
            }
        }
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}