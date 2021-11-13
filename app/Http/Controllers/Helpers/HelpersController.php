<?php

namespace App\Http\Controllers\Helpers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Client_user;
use App\Models\Payment;

class HelpersController extends Controller
{
        
    /**
     * Method get_client_balance
     *
     * @return void
     */
    static public function get_client_balance(){
        $user_id = Auth::id();
        $client = Client_user::where('user_id', $user_id)->first();
        $client_id = $client->client_id;
        $payment = Payment::where('client_id', $client_id)->first();
        $balance = $payment->account_balance;
        return $balance;
    }
    
    /**
     * Method send_mobi_sms
     *
     * @param $mobile $mobile [explicite description]
     * @param $message $message [explicite description]
     *
     * @return void
     */
    static public function send_mobi_sms($mobile, $message){

    }
}
