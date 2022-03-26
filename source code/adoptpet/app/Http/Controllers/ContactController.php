<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

     public function index(){

        $messages=Contact::all();
        return view('admin-dashboard.manage_messages',compact('messages'));

    }

    public function create(){
        return view('admin-dashboard.manage_messages');

    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:250',
            'email'=>'required|max:250',
            'message'=>'required|max:250',
          ]);

          Contact::create([
              "name"=>$request->name,
              "email"=>$request->email,
              "message"=>$request->message,
              "usertype"=>$request->usertype,

         ]);
         return redirect()->back();
    }

    public function storecontact(Request $request) {

        $this->validate($request,[
            'name'=>'required|max:250',
            'email'=>'required|max:250',
            'message'=>'required|max:2500',
          ]);

        Contact::create([
            "name" => $request->name,
            "email" => $request->email,
            "message" => $request->message,
        ]);
        // return redirect()->route('createAdopt.index');
        return view('public-site.aboutus');
        ;
    }


    public function destroy($id)
    {
        $messages=Contact::find($id);
        $messages->destroy($id);

        return redirect()->route('message.index');
    }
}
