<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NewNotif implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
      public $message;

      public function __construct($message)
      {
          $this->message = $message;
      }

      public function broadcastOn()
      {
          return ['notification-channel'];
      }

      public function broadcastAs()
      {
          return 'notification-event';
      }
}
