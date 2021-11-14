<?php

namespace App\Http\Controllers\Helpers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Client_user;
use App\Models\Payment;
use App\Models\Message;
use App\Models\Client;
use AfricasTalking\SDK\AfricasTalking;
use Exception;

class HelpersController extends Controller
{
    /**
     * Method get_client
     *
     * @return void
     */
    static public function get_client()
    {
        $user_id = Auth::id();
        $client_data = Client_user::where('user_id', $user_id)->first();
        $client = Client::where('id', $client_data->client_id)->first();
        return $client;
    }

    /**
     * Method teams
     *
     * @return void
     */
    static public function teams()
    {
        $teams = Client::all();
        return $teams;
    }

    /**
     * Method get_client_balance
     *
     * @return void
     */
    static public function get_client_balance()
    {
        $client = HelpersController::get_client();
        $client_id = $client->id;
        $payment = Payment::where('client_id', $client_id)->first();
        //$balance = $payment->account_balance;
        if ($payment === null) {
            $balance = 0;
        } else {
            $balance = $payment->account_balance;
        }

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
    static public function send_mobi_sms($mobile, $message)
    {
        set_time_limit(0);
        $client = HelpersController::get_client();
        $sender_id = $client->sender_id;
        $username = 'peakanddale'; // use 'sandbox' for development in the test environment
        $apiKey   = $client->api_key; // use your sandbox app API key for development in the test environment

        // $result = [];
        $url = "https://bulk.api.mobitechtechnologies.com/api/sendsms";
        $ch = curl_init($url);
        $data = array(
            'api_key' => $apiKey,
            'username' => $username,
            'sender_id' => $sender_id,
            'message' => $message,
            'phone' => $mobile,
        );

        $payload = json_encode($data);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Accept:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    /**
     * Method save_sms_response
     *
     * @param $result $result [explicite description]
     * @param $message $message [explicite description]
     *
     * @return void
     */
    static public function save_sms_response($client_id, $result, $message)
    {
        set_time_limit(0);
        foreach ($result as $item) {
            switch ($item->status) {
                case '102':
                    $status = $item->status;
                    $message = $item->message;

                    $mes = new Message();
                    $mes->client_id = $client_id;
                    $mes->status = $status;
                    $mes->message = $message;
                    $mes->save();
                    break;

                case '401':
                    $status = $item->status;
                    $message = $item->message;

                    $mes = new Message();
                    $mes->client_id = $client_id;
                    $mes->status = $status;
                    $mes->message = $message;
                    $mes->save();
                    break;

                case '104':
                    $status = $item->status;
                    $message_response = $item->message;
                    $response = 'failed';

                    $mes = new Message();
                    $mes->client_id = $client_id;
                    $mes->status = $status;
                    $mes->message_response = $message_response;
                    $mes->response = $response;
                    $mes->save();
                    break;

                case '200':
                    $status = $item->status;
                    $recipient = $item->recipient;
                    $message_id = $item->message_id;
                    $response = $item->response;

                    $mes = new Message();
                    $mes->client_id = $client_id;
                    $mes->status = $status;
                    $mes->message = $message;
                    $mes->message_id = $message_id;
                    $mes->response = $response;
                    $mes->recipient = $recipient;
                    $mes->save();
                    break;
            }
        }
        return true;
    }

    static public function send_at_sms($mobile, $message)
    {
        set_time_limit(0);
        $client = HelpersController::get_client();
        $sender_id = $client->sender_id;
        $username = $client->username; // use 'sandbox' for development in the test environment
        $apiKey   = $client->api_key;
        $AT       = new AfricasTalking($username, $apiKey);
        // Get one of the services
        $sms      = $AT->sms();
        try {
            $results   = $sms->send([
                'to'      => $mobile,
                'message' => $message,
            ]);
            if ($results) {
                return back()->with('message', 'SMS send successfully!');
            }
        } catch (Exception $e) {
            return back()->with('message', '' . $e->getMessage());
        }
    }

    static public function send_at_airtime($recipients)
    {
        set_time_limit(0);
        $client = HelpersController::get_client();
        $sender_id = $client->sender_id;
        $username = $client->username; // use 'sandbox' for development in the test environment
        $apiKey   = $client->api_key;
        // Set your app credentials
        

        // Initialize the SDK
        $AT       = new AfricasTalking($username, $apiKey);

        // Get the airtime service
        $airtime  = $AT->airtime();

        try {
            // That's it, hit send and we'll take care of the rest
            $results = $airtime->send([
                "recipients" => $recipients
            ]);
           return $results;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
