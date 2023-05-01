<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\ToNotification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function data(){
        $data = ToNotification::with([
            'notification' => [
                'responsbility' => [
                    'rule' => [
                        'communicationType'
                    ]
                ],
                'communication' => [
                    'communicationType'
                ],
                'user'
            ],
        ])->where('user_id',Auth()->user()->id)->get();
        return response()->json($data);
    }

    public function delete($id){
        $data = ToNotification::findorfail($id);
        if($data->communication == null){
            $type = 'responsbility';
        }else{
            $type = 'communication';
        }
        $notif = ToNotification::where('notification_id',$data->notification_id)->count();
        $id = $data->notification_id;
        $data->delete();
        if($notif == 0){
            Notification::find($id)->delete();
        }
        return response()->json($type);
    }
}
