<?php

namespace App\Http\Controllers;

use App\ComprasArticulos;
use App\Http\Requests\API\CompraArticuloRequest;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class ComprasArticulosController extends Controller
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
    public function store(CompraArticuloRequest $request) {
        $requestValidated = $request->validated();
        $compra = ComprasArticulos::store($requestValidated);

        return $this->successResponse($compra, 'success', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ComprasArticulos  $comprasArticulos
     * @return \Illuminate\Http\Response
     */
    public function show(ComprasArticulos $comprasArticulos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ComprasArticulos  $comprasArticulos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComprasArticulos $comprasArticulos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ComprasArticulos  $comprasArticulos
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComprasArticulos $comprasArticulos)
    {
        //
    }
}
