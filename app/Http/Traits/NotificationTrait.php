<?php

namespace App\Http\Traits;

use App\Models\Notification;

trait NotificationTrait
{
    public function sendNotification($reciever_id, $type_id, $noti_type, $noti_text)
    {
        Notification::create([
            'sender_id' => auth()->user()->id,
            'reciever_id' => $reciever_id,
            'type_id' => $type_id,
            'noti_type' => $noti_type,
            'noti_text' => $noti_text
        ]);
    }
}
