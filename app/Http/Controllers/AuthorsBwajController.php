<?php

namespace App\Http\Controllers;

use App\Http\Resources\AuthorsResource;
use App\Models\AuthorsBwaj;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

// use Illuminate\Support\Facades\Redis;

class AuthorsBwajController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $redis = Redis::connection("redis_bwaj");
        // return AuthorsResource::collection($redis->remember(
        //     "bwaj",
        //     60,
        //     function () {
        //         return AuthorsBwaj::all();
        //     }));

        //Redis::store("redis_bwaj")->remember()

        //cache()->remember

        return AuthorsResource::collection(cache()->store("redis_bwaj")->remember(
            "bwaj",
            60 * 5,
            function () {
                return AuthorsBwaj::all();
            }
        ));

        // return AuthorsResource::collection(Cache::store("file_bwaj")->remember(
        //     "bwaj",
        //     60 * 5,
        //     function () {
        //         return AuthorsBwaj::all();
        //     }));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AuthorsBwaj  $authorsBwaj
     * @return \Illuminate\Http\Response
     */
    public function show(AuthorsBwaj $authorsBwaj)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AuthorsBwaj  $authorsBwaj
     * @return \Illuminate\Http\Response
     */
    public function edit(AuthorsBwaj $authorsBwaj)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AuthorsBwaj  $authorsBwaj
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AuthorsBwaj $authorsBwaj)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AuthorsBwaj  $authorsBwaj
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuthorsBwaj $authorsBwaj)
    {
        //
    }
}
