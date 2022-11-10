<?php

namespace App\Http\Controllers;

use App\Models\Listing;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //cara mengambil filter value dengan scope filter 
    //show all listing 
    public function index(Request $request){
        return view('listings.index',[
            // 'listings' => Listing::all();
            'listings' => Listing::latest()->filter(request(['tag','search']))->get()
            //sama dengan all() cuman dia diurutin nya dari latest 
            //ngefilter supaya cuman value query tag aja yg kepanggil
        ]);
    } 
    //show single listing
    public function show(Listing $listing){
        if ($listing){
            return view ('listings.show' ,['listing' => $listing]);
        }
        else {
            abort('404');
        }
    }
    public function create(){
        return view ("listings.create");
    }
    // function store
    public function store(Request $request){
        // dd($request->all());
        $formfields = $request->validate([
            'title' =>  'required',
            'company' => ['required', Rule::unique('listings' , 'company')],
            'location' => ['required'],
            'website' => ['required'],
            'email' => ['required','email'],
            'tags' => 'required' ,
            'description' => 'required' ,
        ]);

        Listing::create($formfields);

        return redirect('/')->with('message' , 'berhasil menambahkan list');
    }
}