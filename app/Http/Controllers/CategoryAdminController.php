<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryAdminController extends Controller
{
    public function category()  {
        return view('admin.category');
    }
}
