<?php

namespace App\Observers;

use App\Models\AuthorsJason;
use Illuminate\Support\Facades\Cache;

class AuthorsJasonObserver
{
    /**
     * Handle the AuthorsJason "created" event.
     *
     * @param  \App\Models\AuthorsJason  $authorsJason
     * @return void
     */
    public function created(AuthorsJason $authorsJason)
    {
        //Cache::forget('jason');
        cache()->store("redis_jason")->forget("jason");
    }

    /**
     * Handle the AuthorsJason "updated" event.
     *
     * @param  \App\Models\AuthorsJason  $authorsJason
     * @return void
     */
    public function updated(AuthorsJason $authorsJason)
    {
        //
    }

    /**
     * Handle the AuthorsJason "deleted" event.
     *
     * @param  \App\Models\AuthorsJason  $authorsJason
     * @return void
     */
    public function deleted(AuthorsJason $authorsJason)
    {
        //
    }

    /**
     * Handle the AuthorsJason "restored" event.
     *
     * @param  \App\Models\AuthorsJason  $authorsJason
     * @return void
     */
    public function restored(AuthorsJason $authorsJason)
    {
        //
    }

    /**
     * Handle the AuthorsJason "force deleted" event.
     *
     * @param  \App\Models\AuthorsJason  $authorsJason
     * @return void
     */
    public function forceDeleted(AuthorsJason $authorsJason)
    {
        //
    }
}
