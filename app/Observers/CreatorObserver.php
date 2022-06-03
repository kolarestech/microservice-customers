<?php

namespace App\Observers;

use App\Models\Creator;
use Illuminate\Support\Str;

class CreatorObserver
{
    /**
     * Handle the Creator "creating" event.
     *
     * @param  \App\Models\Creator  $creator
     * @return void
     */
    public function creating(Creator $creator)
    {
        $creator->uuid = Str::uuid();
        $creator->slug = Str::slug($creator->name, '-');
    }

    /**
     * Handle the Creator "created" event.
     *
     * @param  \App\Models\Creator  $creator
     * @return void
     */
    public function created(Creator $creator)
    {
        //
    }

    /**
     * Handle the Creator "updated" event.
     *
     * @param  \App\Models\Creator  $creator
     * @return void
     */
    public function updated(Creator $creator)
    {
        //
    }

    /**
     * Handle the Creator "deleted" event.
     *
     * @param  \App\Models\Creator  $creator
     * @return void
     */
    public function deleted(Creator $creator)
    {
        //
    }

    /**
     * Handle the Creator "restored" event.
     *
     * @param  \App\Models\Creator  $creator
     * @return void
     */
    public function restored(Creator $creator)
    {
        //
    }

    /**
     * Handle the Creator "force deleted" event.
     *
     * @param  \App\Models\Creator  $creator
     * @return void
     */
    public function forceDeleted(Creator $creator)
    {
        //
    }
}
