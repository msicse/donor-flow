<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return view('backend.payments');
    }
    public function setting()
    {
        return view('backend.settings');
    }
}
