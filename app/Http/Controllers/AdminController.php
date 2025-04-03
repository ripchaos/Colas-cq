<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function usuarios()
    {
        return view('admin.usuarios');
    }

    public function departamentos()
    {
        return view('admin.departamentos');
    }

    public function configuracion()
    {
        return view('admin.configuraciones');
    }

    public function impresoras()
    {
        return view('admin.impresoras');
    }
}
