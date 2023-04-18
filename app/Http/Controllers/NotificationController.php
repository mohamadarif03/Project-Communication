<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function data(){
        $data = Notification::with([
            'user',
            'responbility' => [
                'rule' => [
                    'communicationType'
                ]
            ],
            'communication' => [
                'communicationType'
            ],
            'ToNotification'
            ])->join('to_notifications','to_notifications.notification_id','=','notifications.id')
              ->where('to_notifications.user_id',Auth()->user()->id)
              ->select('notifications.*')
              ->get();

        return response()->json($data);
    }

    public function delete($id){
        $data = Notification::findorfail($id);
        if($data->communication == null){
            $type = 'responsbility';
        }else{
            $type = 'communication';
        }
        $data->delete();
        return response()->json($type);
    }
}
