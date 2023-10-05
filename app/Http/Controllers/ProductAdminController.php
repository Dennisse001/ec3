<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\productadmin;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class ProductAdminController extends Controller
{
    public function adminproduct()
    {
        $data = productadmin::all();
        return view('admin.showprod', ['data' => $data]);
    }

    public function uploadprod()
    {
        $categories = kategori::all();


        return view('admin.createprod', ['categories' => $categories]);
    }
    public function tambahprod(Request $request) {

        $model  = new productadmin();
        $model->judul = $request->judul;
        $model->brand = $request->brand;
        $model->isi = $request->isi;
        $model->singkat = $request->singkat;
        $model->harga = $request->harga;
        $model->tags = $request->tags;
        $model->status = $request->status;
        $model->public = $request->public;
        $model->size = $request->size;
        $model->stock = $request->stock;
        $model->category()->associate($request->kategori_id);


        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            @unlink(storage_path('app/public/admin_prod/' . $model->cover));
            $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/admin_prod', $filename);
            $model->cover = $filename;
        }

        $model->save();

        return redirect()->route('promin');


    }
}

