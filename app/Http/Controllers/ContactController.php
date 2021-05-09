<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
class ContactController extends Controller
{
    public function submit(ContactRequest $req){
        //dd($req->input('subject'));
        //$validation = $req->validate([
          //  'subject'=>'required|min:4|max:50',
          //  'message'=>'required|min:10|max:500',
          //  'name'=>'required|min:2|max:30',
          //  'email'=>'required',
      //  ]);
    }
}
