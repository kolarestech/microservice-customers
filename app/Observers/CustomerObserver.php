<?php

namespace App\Observers;

use App\Models\Customer;
use Illuminate\Support\Str;

class CustomerObserver
{
    /**
     * Handle the Customer "creating" event.
     *
     * @param  \App\Models\Customer  $creator
     * @return void
     */
    public function creating(Customer $creator)
    {
        $creator->uuid = Str::uuid();
        $creator->slug = Str::slug($creator->name, '-');
    }

    /**
     * Handle the Customer "created" event.
     *
     * @param  \App\Models\Customer  $creator
     * @return void
     */
    public function created(Customer $creator)
    {
        //
    }

    /**
     * Handle the Customer "updated" event.
     *
     * @param  \App\Models\Customer  $creator
     * @return void
     */
    public function updated(Customer $creator)
    {
        //
    }

    /**
     * Handle the Customer "deleted" event.
     *
     * @param  \App\Models\Customer  $creator
     * @return void
     */
    public function deleted(Customer $creator)
    {
        //
    }

    /**
     * Handle the Customer "restored" event.
     *
     * @param  \App\Models\Customer  $creator
     * @return void
     */
    public function restored(Customer $creator)
    {
        //
    }

    /**
     * Handle the Customer "force deleted" event.
     *
     * @param  \App\Models\Customer  $creator
     * @return void
     */
    public function forceDeleted(Customer $creator)
    {
        //
    }
}
