<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SosmedController extends Controller
{
    public function createsosmed(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->facebook = $request->facebook;
        $data->whatsapp = $request->whatsapp;
        $data->twitter = $request->twitter;
        $data->instagram = $request->instagram;
        $data->tiktok = $request->tiktok;

        $data->save();
        return redirect()->back();
    }
}
