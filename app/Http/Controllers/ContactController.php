<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
  public function index(){
    return view('contact.index');
  } 

  public function store( Request $request ) {
    $request->validate([
      'name' => 'required',
      'email' => 'required|email',
      'body' => 'required',
    ]);
    $email = new ContactoMail($request->all());
    Mail::to('alejo.jesus.magne@gmail.com')->send($email);
    return redirect()->route('contactus.index')->with('info','Mensaje enviado');
  }
}
