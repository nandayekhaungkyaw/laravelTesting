<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Curry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CurryController extends Controller
{

    public function index()
{
    $curries = Curry::all(); // Or paginate if many
    return view('dashboard', compact('curries'));
}


    public function home()
    {
        $curries=Curry::take(3)->get();
        return view('home',compact('curries'));
    }

    public function menu()
    {
     ;
        $query=Curry::query();
        if(request('query')){
            $query->where('name','like','%'.request('query').'%');
        }
        if(request('category')){
            $query->where('category',request('category'));
        }
        $curries=$query->paginate(9);
       return view('menu',compact('curries'));
    }


    public function contact()
    {
        return view('contact');
    }
   public function menuDetail($id)
   {
    $curry=Curry::find($id);
    return view('menuDetail',compact('curry'));
   }
}
