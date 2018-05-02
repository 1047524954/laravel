<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\AppServiceProvider;

class IndexController extends Controller
{
    public function index(){
        return view('admin.admin.index');
    }

    public function index2(){
        return view('admin.admin.index2');
    }
}
