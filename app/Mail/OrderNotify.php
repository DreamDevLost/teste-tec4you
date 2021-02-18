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
        $this->brand = $part->model->brand->name;
        $this->model = $part->model->name;
        $this->part = $part->name;
        $this->price = $part->price;
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
            'brand' => $this->brand,
            'model' => $this->model,
            'part' => $this->part,
            'price' => $this->price,
            'message' => $this->message
        ]);
    }
}
