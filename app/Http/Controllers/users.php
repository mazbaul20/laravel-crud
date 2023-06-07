<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class users extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $users = DB::table('users')->select('*')->get();
        return view('index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|string',
            'email' => 'required|email',
            'password' => 'required'
        ],[
           'fname.required' => 'Name is required',
           'email.required' => 'Email is required',
           'password.required' => 'Password is required',
        ]);
        DB::table('users')->insert([
            'firstName'=>$request->fname,
            'lastName'=>$request->lname,
            'email'=>$request->email,
            'password'=>$request->password
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show($user_id)
    {
        $users = DB::table('users')->find($user_id);
        return view('update',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // dd($request->all());
        $user_id = $request->user_id;
        $request->validate([
            'fname' => 'required|string',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // dd($request->all());
        DB::table('users')->where('id',$user_id)->update([
            'firstName'=>$request->fname,
            'lastName'=>$request->lname,
            'email'=>$request->email,
            'password'=>$request->password
        ]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        // dd($request->all('delete'));
        // dd('delete');
        DB::table('users')->where('id','=',$request->user_id)->delete();
        return redirect('/');
    }

}
