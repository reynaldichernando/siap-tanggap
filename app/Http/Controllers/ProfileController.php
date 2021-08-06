<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }

    /**
     * Edit profile
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'profile-picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = User::find($request->user()->id);
        // $user->user_id = $request->user()->id;
        $user->name = $request->name;
        
        
        if ($request->hasFile('profile-picture'))
            $user->profile_picture = $request->file('profile-picture')->store('images', 'public');
        

        // dd($user);
        $user->save();

        return redirect()->back()->with('message', 'Data Berhasil Disimpan!');
    }
}
