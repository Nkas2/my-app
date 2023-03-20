<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_view = [
            'posts' => [
                [
                    'tittle' => 'Atlet Bulutangkis Syabda Perkasa Belawa Meninggal Dunia Baca artikel CNN Indonesia "Atlet Bulutangkis Syabda Perkasa Belawa Meninggal Dunia"',
                    'content' => 'Pada Senin pagi, media sosial diramaikan dengan berita duka yang dialami dunia bulutangkis Indonesia. Salah satu atlet tunggal putra pratama PBSI Syabda Perkasa Belawa diklaim meninggal dunia. Baca artikel CNN Indonesia "Atlet Bulutangkis Syabda Perkasa Belawa Meninggal Dunia"'
                ],
                [
                    'tittle' => 'Atlet Bulutangkis Syabda Perkasa Belawa Meninggal Dunia Baca artikel CNN Indonesia "Atlet Bulutangkis Syabda Perkasa Belawa Meninggal Dunia"',
                    'content' => 'Pada Senin pagi, media sosial diramaikan dengan berita duka yang dialami dunia bulutangkis Indonesia. Salah satu atlet tunggal putra pratama PBSI Syabda Perkasa Belawa diklaim meninggal dunia. Baca artikel CNN Indonesia "Atlet Bulutangkis Syabda Perkasa Belawa Meninggal Dunia"'
                ],
                [
                    'tittle' => 'Atlet Bulutangkis Syabda Perkasa Belawa Meninggal Dunia Baca artikel CNN Indonesia "Atlet Bulutangkis Syabda Perkasa Belawa Meninggal Dunia"',
                    'content' => 'Pada Senin pagi, media sosial diramaikan dengan berita duka yang dialami dunia bulutangkis Indonesia. Salah satu atlet tunggal putra pratama PBSI Syabda Perkasa Belawa diklaim meninggal dunia. Baca artikel CNN Indonesia "Atlet Bulutangkis Syabda Perkasa Belawa Meninggal Dunia"'
                ],
            ],
            'users' => [
                'agus',
                'budi',
                'joni',
                'jojo',
            ]
        ];
        return view('posts.index', $data_view);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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