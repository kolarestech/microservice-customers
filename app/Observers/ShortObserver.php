<?php

namespace App\Observers;

use App\Models\Short;
use Illuminate\Support\Str;

class ShortObserver
{
    /**
     * Handle the Short "creating" event.
     *
     * @param  \App\Models\Short  $short
     * @return void
     */
    public function creating(Short $short)
    {
        $short->uuid = Str::uuid();
    }

    /**
     * Handle the Short "created" event.
     *
     * @param  \App\Models\Short  $short
     * @return void
     */
    public function created(Short $short)
    {
        //
    }

    /**
     * Handle the Short "updated" event.
     *
     * @param  \App\Models\Short  $short
     * @return void
     */
    public function updated(Short $short)
    {
        //
    }

    /**
     * Handle the Short "deleted" event.
     *
     * @param  \App\Models\Short  $short
     * @return void
     */
    public function deleted(Short $short)
    {
        //
    }

    /**
     * Handle the Short "restored" event.
     *
     * @param  \App\Models\Short  $short
     * @return void
     */
    public function restored(Short $short)
    {
        //
    }

    /**
     * Handle the Short "force deleted" event.
     *
     * @param  \App\Models\Short  $short
     * @return void
     */
    public function forceDeleted(Short $short)
    {
        //
    }
}
