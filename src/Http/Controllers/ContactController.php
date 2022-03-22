<?php

namespace Foobar\Contact\Http\Controllers;

use Throwable;
use Illuminate\Http\Request;
use Foobar\Contact\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Foobar\Contact\Mail\ContactMailable;

class ContactController extends Controller{


    public function contactGet()
    {
      return view('contact::contact');
    }

    public function contactPost(Request $request)
    {

      $status = false;
      try{
         Mail::to(config('contact.contact_email_to'))->send(new ContactMailable($request->all()));
         $status = true;
      }catch(Throwable $e){
          report($e);
      }
      if($status){
        $object = new Contact();
        $object->name = $request->name;
        $object->email = $request->email;
        $object->text = $request->text;
        $object->save();
      }


      return redirect()->back();

    }

}
