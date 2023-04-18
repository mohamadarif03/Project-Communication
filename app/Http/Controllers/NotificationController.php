<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function data(){
        $data = Notification::with([
            'user',
            'responbility',
            'communication',
            ])->join('to_notifications','to_notifications.notification_id','=','notifications.id')
              ->where('');
    }

    public function delete(){

    }
}
