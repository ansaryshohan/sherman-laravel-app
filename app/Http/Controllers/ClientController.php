<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {

    }
    //======= client data show========
    public function show()
    {
        $clients = Client::all();
        return view('master.pages.all-clients', ["clients" => $clients]);
    }
    // ====== client add form ==========
    public function create()
    {
        return view('master.pages.add-client');
    }
    // ====== client data add to db =========
    public function store(Request $request)
    {
        $image = $request->file("client_image");
        $renameImage = "";
        if ($request->hasFile("client_image")) {
            $imageFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $imageExt = $image->getClientOriginalExtension();

            $renameImage = time() . "_" . rand(100000, 100000000) . "_" . $imageFilename . "." . $imageExt;
        }


        $storedClient = Client::create([
            "name" => $request["name"],
            "email" => $request["email"],
            "phone_no" => $request["phone_no"],
            "description" => $request["description"],
            "client_image"=>$renameImage
        ]);

        $message = "";
        if (!$storedClient) {
            $message = "error creating client";
            return redirect()->back()->with('error', $message);
        }
        ;
        $image->move(public_path("clientImage"),$renameImage);
        $message = "client added successfully";
        // return view('master.pages.add-client',["message"=>$message]);
        return redirect()->back()->with('message', $message);
    }

    // ===== client data delete====
    public function destroy($id){
        $client = Client::findOrFail($id);
        $image =$client["client_image"];
        if (file_exists(public_path('clientImage/' . $image))) {
            unlink(public_path('clientImage/' . $image));
        }

        $client->delete();
        return redirect()->back()->with('message', 'Client deleted successfully!');
    }

}
