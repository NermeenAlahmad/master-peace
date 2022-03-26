<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    // function getData(Request $req){
    //     $req->validate([
    //         'email'=>'required'
    //     ]);
    //     return $req->input();
    // }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return view('admin-dashboard.manage_users',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-dashboard.manage_users');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'first_name'=>'required|max:250',
            'last_name'=>'required|max:250',
            'password'=>'required|max:250',
            'email'=>'required|max:250',
            'phone'=>'required|max:250',
            'address'=>'required|max:250',
          ]);

          User::create([
              "first_name"=>$request->first_name,
              "last_name"=>$request->last_name,
              "email"=>$request->email,
              "phone"=>$request->phone,
              "address"=>$request->address,
              "password"=> Hash::make ($request->password) ,
              "usertype"=>$request->usertype,

         ]);
         return redirect()->back();
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
        $user=User::find($id);
        return view('admin-dashboard.updates.user_update',compact('user'));
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
        $user=user::find($id);

        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->phone=$request->phone;
        $user->address=$request->address;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->usertype=$request->usertype;

        $user->update();
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->destroy($id);

        return redirect()->route('user.index');
    }
}
