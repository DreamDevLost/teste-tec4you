<?php

namespace App\Mail;

use App\Models\ModelPart;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderNotify extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ModelPart $part, $message)
    {
        $this->part = $part;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.orders.notify', [
            'brand' => $this->part->model->brand->name,
            'model' => $this->part->model->name,
            'part' => $this->part->name,
            'price' => $this->part->price,
            'message' => $this->message
        ])->subject('Notificação de pedido');
    }
}
