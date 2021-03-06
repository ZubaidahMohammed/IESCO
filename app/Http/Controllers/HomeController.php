<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\User;

use Notification;

use App\Notifications\maildeliverynotification;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.home');
    }
    public function sendNotification()
    {
        $user = User::first();
        $details = [

            'greeting' => 'Hi Artisan',

            'body' => 'This is my first notification from ItSolutionStuff.com',

            'thanks' => 'Thank you for using ItSolutionStuff.com tuto!',

            'actionText' => 'View My Site',

            'actionURL' => url('/'),

            'order_id' => 101
        ];
        Notification::send($user, new maildeliverynotification($details));

        dd('done');
    }

 

}