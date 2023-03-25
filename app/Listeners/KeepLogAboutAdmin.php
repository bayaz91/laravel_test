<?php

namespace App\Listeners;

use App\Events\AdminProcessed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class KeepLogAboutAdmin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\AdminProcessed  $event
     * @return void
     */
    public function handle(AdminProcessed $event)
    {
        Log::info('Admin Event is processed');
    }
}
