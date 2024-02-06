<?php

namespace App\Http\Controllers;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    //
    public function index(){
        $data = photo::all();
        return view('welcome2' , ['photo'=>$data]);
    }
    public function create (){
        return view('add_photo');
    }

    public function store(Request $request)
    {
        request()->validate([
            'description'=>["required",'min:5'],
            'price'=>["required"],
            'photo'=>["required|image|mimes:jpeg,png,jpg,gig,svg"],
        ]);
        $description = request()->description;
        $price = request()->price;
        $photo = request()-> photo_name;
        $name  = request()->product_type;

        $photo = new Photo ;

        $photo -> photo ='image' ;
        $photo -> description = $description;
        $photo ->price =$price ; 
        $photo ->name  =$name ;

        $photo->save();
        
        return redirect()->back()->with('success' , 'photo uploaded successfully');

    }
}
