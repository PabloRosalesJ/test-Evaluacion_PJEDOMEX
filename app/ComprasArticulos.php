<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ComprasArticulos extends Model
{
    protected $table = 'tblcomprasarticulos';
    public $timestamps = false;
    protected $guarded  = [];

    public static function store(array $data) {

        $compra = null;
        $comprasArticulos = null;

        DB::beginTransaction();

        try {
            $tblCompra = [
                'fechaCompra' => $data['fechaCompra'],
                'factura' => $data['factura'],
                'provedor' => $data['provedor'],
                'cantidad' => $data['cantidad'],
                'fechaEntrega' => $data['fechaEntrega'],
                'idUsuario' => auth()->id(),
            ];

            $compra = Compras::create($tblCompra);

            $idCompra = $compra->id;
            $existencias = Articulos::find($data['idArticulo'])->existentes;

            $tblComprasArticulos = [
                'idCompra' => $idCompra,
                'idArticulo' => $data['idArticulo'],
                'cantidadArticulo' => $data['cantidad'],
                'existencias' => $existencias,
            ];

            $comprasArticulos = ComprasArticulos::create($tblComprasArticulos);

        } catch (\Throwable $th) {
            Log::info($th);
            DB::rollBack();
        }

        DB::commit();
        return array_merge($compra->toArray(), $comprasArticulos->toArray());
    }
}
