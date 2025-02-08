<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Notifications\NewMessageNotification;

class NotificationController extends Controller
{
    // Notification পাঠানোর ফাংশন
    public function sendNotification()
    {
        $user = User::find(1); // ইউজার ID 1 এর কাছে পাঠাবে
        $user->notify(new NewMessageNotification('আপনার নতুন মেসেজ এসেছে!'));
        
        return response()->json(['message' => 'Notification Sent Successfully!']);
    }

    // Notification দেখানোর ফাংশন
    public function getNotifications()
    {
        return response()->json([
            'notifications' => Auth::user()->unreadNotifications
        ]);
    }

    // Notification Seen করার ফাংশন
    public function markAsRead()
    {
        Auth::user()->unreadNotifications->markAsRead();
        return response()->json(['message' => 'All notifications marked as read']);
    }
}
