<?php

namespace App\Observers;

use App\Compras;
use Illuminate\Support\Facades\Log;

class CompraObserver
{
    /**
     * Handle the = compras "created" event.
     *
     * @param  \App\Compras  $Compras
     * @return void
     */
    public function created(Compras $Compras) {
        Log::info($Compras);
    }

    /**
     * Handle the = compras "updated" event.
     *
     * @param  \App\Compras  $Compras
     * @return void
     */
    public function updated(Compras $Compras)
    {
        //
    }

    /**
     * Handle the = compras "deleted" event.
     *
     * @param  \App\Compras  $Compras
     * @return void
     */
    public function deleted(Compras $Compras)
    {
        //
    }

    /**
     * Handle the = compras "restored" event.
     *
     * @param  \App\Compras  $Compras
     * @return void
     */
    public function restored(Compras $Compras)
    {
        //
    }

    /**
     * Handle the = compras "force deleted" event.
     *
     * @param  \App\Compras  $Compras
     * @return void
     */
    public function forceDeleted(Compras $Compras)
    {
        //
    }
}
