<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function mail()
    {
        $name = 'Krunal';
        Mail::to('mhdhussien@yala-job.com')->send(new SendMailable($name));
        
        return 'Email was sent';
    }
}
