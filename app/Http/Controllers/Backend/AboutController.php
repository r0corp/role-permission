<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:about-list|about-create|about-edit|about-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:about-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:about-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:about-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        return view('backend.abouts.index');
    }
}
