<?php

namespace App\Http\Controllers\ContactUs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
    public function index()
    { 
        return view('pages.contact-us');
    }

}
