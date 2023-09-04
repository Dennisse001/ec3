<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function admindashboard()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.dash', compact('profileData'));
    }
    public function adminlogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function adminprofile()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('admin.account', compact('profileData'));
    }
    public function adminedit()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('admin.accset', compact('profileData'));
    }
    public function adminprofilestore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->nama_depan = $request->nama_depan;
        $data->nama_belakang = $request->nama_belakang;
        $data->username = $request->username;
        $data->profesi = $request->profesi;
        $data->alamat = $request->alamat;
        $data->kode_pos = $request->kode_pos;
        $data->email = $request->email;
        $data->no_hp = $request->no_hp;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            @unlink(storage_path('app/public/userimg/' . $data->foto));
            $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/userimg', $filename);
            $data->foto = $filename;
        }

        $data->save();
        return redirect()->back();
    }
    public function adminchangepass(Request $request) {
        $request->validate(
        ['old_password' => 'required',
        'new_password' => 'required|confirmed']
        );
        if (!Hash::check($request->old_password, auth::user()->password)){
            return back();

        }
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return back();
    }
}
