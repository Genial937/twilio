<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Client_user;
use App\Models\Tag;
use App\Models\Contact;
use App\Http\Controllers\Helpers\HelpersController;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = HelpersController::get_client();
        $contacts = Contact::where('client_id', $client->id)->with('tags')->latest()->get();
        return view('contacts.index', compact('contacts'));
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
        $tags = Tag::where('client_id', $client_id)->get();
        return view('contacts.create', compact('tags'));
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
            'phone' => ['max:10', 'min:10']
        ]);
        $tag = Tag::findOrFail($request->tag_id);
        $client_id = $tag->client_id;
        $contact = substr($request->phone, 1);
        $phone = '254' . $contact;
        Contact::create(array_merge(
            $request->all(),
            [
                'client_id' => $client_id,
                'phone' => $phone,
            ]
        ));
        return back()->withStatus('Contact added successfully!');
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

    public function get_contacts($id)
    {
        $contacts = Contact::where('tag_id', $id)->get()->count();
        return $contacts;
    }
}
