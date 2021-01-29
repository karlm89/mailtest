<?php

namespace App\Http\Controllers;

use App\Mail\testMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        dump('mail here');
    }

    public function store(Request $request)
    {
        Mail::to('test@example.com')->send(new testMail);
    }
}