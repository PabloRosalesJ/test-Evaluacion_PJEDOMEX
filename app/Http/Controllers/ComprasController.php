<?php

namespace App\Http\Controllers;

use App\Compras;
use App\Http\Requests\API\ComprasRequest;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class ComprasController extends Controller {

    use ApiResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $compras = Compras::paginate(30);

        return $this->successResponse($compras);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComprasRequest $request) {
        $validatedRequest = $request->validated();

        $compra = Compras::create($validatedRequest);
        return $this->successResponse($compra, 'success', 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compras $compras) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Compras  $compras
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compras $compras) {
        //
    }
}
