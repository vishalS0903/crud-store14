<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Contact as ModelsContact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store (Request $request){

        $product= new Contact();
        $product->name =$request->name;
        $product->email =$request->email;
        $product->adhar =$request->adhar;
        $product-> mobile=$request->mobile;
        $product->pwd =$request->pwd;
        $product->text =$request->text;
        $product-> save();


    }public function index(){
        $contacts=Contact::all();
        return view('table',compact('contacts'));
    }
}
