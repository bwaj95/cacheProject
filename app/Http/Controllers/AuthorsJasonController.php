<?php

namespace App\Http\Controllers;

use App\Http\Resources\AuthorsResource;
use App\Models\AuthorsJason;
use Illuminate\Http\Request;

class AuthorsJasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AuthorsResource::collection(cache()->store("redis_jason")->remember(
            "jason",
            60 * 5,
            function () {
                return AuthorsJason::all();
            }
        ));

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
     * @param  \App\Models\AuthorsJason  $authorsJason
     * @return \Illuminate\Http\Response
     */
    public function show(AuthorsJason $authorsJason)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AuthorsJason  $authorsJason
     * @return \Illuminate\Http\Response
     */
    public function edit(AuthorsJason $authorsJason)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AuthorsJason  $authorsJason
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AuthorsJason $authorsJason)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AuthorsJason  $authorsJason
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuthorsJason $authorsJason)
    {
        //
    }
}
