<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //  show all listing
    public function index(){
        return view('listings.index',[
       
            'listings' => Listing::all()
        ]);
    }

    //  show single listing
    public function show( listing $listing){
        return view('listings.show',[
            'listing' => $listing
        ]);
    }
}
