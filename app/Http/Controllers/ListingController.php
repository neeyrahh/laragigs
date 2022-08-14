<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //  show all listing
    public function index(){
       
        return view('listings.index',[
       
            'listings' => Listing::latest()->filter(request(['tag','search']))->get()
        ]);
    }

    

    // Show Create Form
    public function create() {
        return view('listings.create');
    }

    //store listing data
    public function store(Request $req){
       $formFields=$req->validate([
        'title'=>'required',
        'company'=> 'required',
        'location'=>'required',
        'website'=>'required',
        'email'=>'required',
        'tags'=>'required',
        'description'=>'required'
       ]);

       Listing::create($formFields);

       return redirect('/')->with('message','Listing successfully created');
    }

    //  show single listing
    public function show( listing $listing){
        return view('listings.show',[
            'listing' => $listing
        ]);
    }
   
}
