<?php

namespace App\Observers;

use App\Models\AuthorsBwaj;
use Illuminate\Support\Facades\Cache;

class AuthorsBwajObserver
{
    /**
     * Handle the AuthorsBwaj "created" event.
     *
     * @param  \App\Models\AuthorsBwaj  $authorsBwaj
     * @return void
     */
    public function created(AuthorsBwaj $authorsBwaj)
    {
        cache()->store("redis_bwaj")->forget("bwaj");
    }

}
