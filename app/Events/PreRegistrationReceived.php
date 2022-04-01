<?php

namespace App\Events;

use App\Models\PreRegistration;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PreRegistrationReceived
{
    use Dispatchable, SerializesModels;

    public $preRegistration;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(PreRegistration $preRegistration)
    {
        $this->preRegistration = $preRegistration;
    }
}
