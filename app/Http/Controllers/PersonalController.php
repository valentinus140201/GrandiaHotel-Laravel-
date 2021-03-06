<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function search(Request $request)
    {
        // dd($request);
        $personal = User::where('name', 'like', "%{$request->search}%")->paginate(10);
        return view('personal.index', ['users' => $personal, 'title' => 'Search for ' . $request->search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // $wad = $request->expire;


        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required', 'min:5', 'max:255', 'unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'type' => 'required',
        ]);

        $validateData['password'] = md5($validateData['password']);
        User::create($validateData);
        // $validateData['expired_at'] = $request->expire;

        $temp = User::where('email', '=', $request->email)->first();
        // dd($temp);
        $temp->expired_at = $request->expire;
        $temp->save();
        // dd($validateData['password']);



        return redirect()->intended('/personal');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = User::latest()->paginate(10)->withQueryString();
        return view('personal.index', ['title' => 'Add Personal', 'users' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required', 'min:5', 'max:255', 'unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'type' => 'required',
        ]);

        $validateData['password'] = md5($validateData['password']);

        User::where('id', $request->id)->update($validateData);
                return redirect()->intended('/personal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->intended('/personal')->with('success', 'Personal has been deleted');
    }
}
