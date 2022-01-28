<?php

namespace App\Events;

use App\Models\People;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PersonUpdated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var People
     */
    public $person;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(People $person)
    {
        $this->person = $person;
    }
}
