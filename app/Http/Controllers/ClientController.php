<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {

    }
    public function show()
    {
        $clients= Client::all() ;
        return view('master.pages.all-clients',["clients"=> $clients]);
    }
    public function create()
    {
        return view('master.pages.add-client');
    }
    public function store(Request $request)
    {
        $storedClient = Client::create([
            "name"          => $request["name"],
            "email"         => $request["email"],
            "phone_no"      => $request["phone_no"],
            "description"   => $request["description"]
        ]);

        $message = "";
        if (!$storedClient) {
            $message = "error creating client";
            return redirect()->back()->with('message', $message);
        }
        ;
        $message = "client added successfully";
        // return view('master.pages.add-client',["message"=>$message]);
        return redirect()->back()->with('message', $message);
    }
}
