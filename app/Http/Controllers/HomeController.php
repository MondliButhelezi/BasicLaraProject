<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        return view ('home.index');
    }

    public function upload(Request $request)
    {
        $data = new Post();

        $data-> username = Auth::user() -> name;

        $data->description = $request->description;


        //insert image to database    
        $image=$request ->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('post', $imagename);
        // ends here

        $data->image = $imagename;

        $data -> save();
        return redirect() ->back();
    }
}

