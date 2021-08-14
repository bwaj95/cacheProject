<?php

namespace App\Observers;

use App\Models\AuthorsGana;
use Illuminate\Support\Facades\Cache;

class AuthorsGanaObserver
{
    /**
     * Handle the AuthorsGana "created" event.
     *
     * @param  \App\Models\AuthorsGana  $authorsGana
     * @return void
     */
    public function created(AuthorsGana $authorsGana)
    {
        cache()->store("redis_gana")->forget("gana");
    }
}
