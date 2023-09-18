<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryAdminController extends Controller
{
    public function category()  {
        return view('admin.categories');
    }

    public function create_category(Request $request)
    {
        $data  = new kategori();
        $data->name = $request->name;
        $data->deskripsi = $request->deskripsi;
        $data->save();
        return redirect()->back();
    }
}
