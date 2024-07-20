<?php

namespace Codehubcare\AdminUi\Http\Controllers;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('adminui::admin.index');
    }
}
