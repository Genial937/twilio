<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Client_user;
use App\Models\Tag;
use App\Models\Contact;
use App\Http\Controllers\Helpers\HelpersController;

class SMSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sms.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth::id();
        $client = Client_user::where('user_id', $user_id)->first();
        $client_id = $client->client_id;
        $tags = Tag::where('client_id', $client_id)->with(['contacts'])->get();
        return view('sms.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        set_time_limit(0);
        $client = HelpersController::get_client();
        $tag_id = $request->tag_id;
        $price = $request->price;
        $message = $request->message;
        $balance = $request->balance;
        //$result = [];

        if ($price > $balance) {
            return 400;
        } else {
            $contacts = Contact::where('tag_id', $tag_id)->get();
            $chunk = $contacts->chunk(50);
            foreach ($chunk as $key => $contact) {
                //dd($receivers);
               foreach ($contact as $key => $receiver) {
                $result = HelpersController::send_mobi_sms($receiver->phone, $message);
               $res = HelpersController::save_sms_response($client->id, $result, $message);
               }
            }
            //return $result;
            //save response in local db
            return 200;
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
