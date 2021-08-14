<?php

namespace App\Http\Controllers;

use App\Http\Resources\AuthorsResource;
use App\Models\AuthorsGana;
use Illuminate\Http\Request;

class AuthorsGanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return AuthorsResource::collection(cache()->store("redis_gana")->remember(
            "gana",
            60 * 5,
            function () {
                return AuthorsGana::all();
            }
        ));

        return AuthorsResource::collection(AuthorsGana::all());
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
     * @param  \App\Models\AuthorsGana  $authorsGana
     * @return \Illuminate\Http\Response
     */
    public function show(AuthorsGana $authorsGana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AuthorsGana  $authorsGana
     * @return \Illuminate\Http\Response
     */
    public function edit(AuthorsGana $authorsGana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AuthorsGana  $authorsGana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AuthorsGana $authorsGana)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AuthorsGana  $authorsGana
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuthorsGana $authorsGana)
    {
        //
    }
}
