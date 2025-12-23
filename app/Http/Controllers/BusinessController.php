<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index() {
        $business = Business::find(1);
        return view('business.index', compact(
            'business'
        ));
    }
}
