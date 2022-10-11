<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = User::where('id', '=', Auth::user()->id)->first();
        $districtName = User::select('name')->where('id', '=', Auth::user()->district_id)->first();
        return view('dashboard.profile.index', compact('profile', 'districtName'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $profile)
    {
        $request->validate([
            'phone' => 'required|string|max:25',
            'email' => 'required|email|unique:users,email,' . $profile->id,
            'password' => 'nullable|string|min:8|max:255',
            'password_confirm' => 'same:password',
            'contact_person' => 'string|max:255'
        ]);

        if ($request->filled('password')) {
            $profile->password = Hash::make($request->input('password'));
        }

        $profile->name = $request->input('name');
        $profile->phone = $request->input('phone');
        $profile->email = $request->input('email');
        $profile->contact_person = $request->input('contact_person');
        $profile->save();

        return redirect()->route('profile.index')->with('success', 'Profil Anda telah diubah.');
    }
}
