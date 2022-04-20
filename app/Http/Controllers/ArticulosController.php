<?php

namespace App\Http\Controllers;

use App\Articulos;
use App\Http\Requests\API\ArticuloRequest;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class ArticulosController extends Controller
{

    use ApiResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticuloRequest $request) {
        $requestValidaed = $request->validated();
        $articulo = Articulos::create($requestValidaed);

        return $this->successResponse($articulo, 'success', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Articulos  $articulos
     * @return \Illuminate\Http\Response
     */
    public function show(Articulos $articulos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Articulos  $articulos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articulos $articulos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Articulos  $articulos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articulos $articulos)
    {
        //
    }
}
