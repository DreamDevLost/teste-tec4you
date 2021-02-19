<?php

namespace App\Listeners;

use App\Events\OrderMake;
use App\Mail\OrderNotify;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendOrderMakeEmailNotification
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
     * @param  OrderMake  $event
     * @return void
     */
    public function handle(OrderMake $event)
    {
        Mail::to([config('app.email_destination')])
            ->send(new OrderNotify($event->part, $event->message));
    }
}
