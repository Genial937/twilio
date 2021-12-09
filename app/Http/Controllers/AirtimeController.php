<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Contact;
use App\Http\Controllers\Helpers\HelpersController;

class AirtimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('airtime.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = HelpersController::get_client();
        $tags = Tag::where('client_id', $client->id)->with(['contacts'])->get();
        return view('airtime.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'tag_id' => ['required'],
            'amount' => ['required']
        ]);
        $tag_id = $request->tag_id;
        $contacts = Contact::where('tag_id', $tag_id)->get();
        $mobiles = [];
        foreach ($contacts as $contact) {
            $mobiles[] =  '+'.$contact->phone;
        }
        $mobile = implode(',', $mobiles);
        $recipients = [[
            "phoneNumber"  => $mobile,
            "currencyCode" => "KES",
            "amount"       => $request->amount
        ]];
        $result = HelpersController::send_at_airtime($recipients);
        return $result;
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

    public function test_airtime(){
        $recipients = [[
            "phoneNumber"  => '254743160199',
            "currencyCode" => "KES",
            "amount"       => 5
        ]];
        $result = HelpersController::send_at_airtime($recipients);
        return $result;
    }
    
}
