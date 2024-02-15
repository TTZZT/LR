<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact.contact');
    }


    public function store(Request $request)
    {
        try{
            $validator = validator::make($request->all(),[
                'name' => 'require',
                'email' => 'require',
                'email' => 'require',
            ]);
            if($validator->fails())
            {
                return response()->json(['error'=>$validator->error(),400]);
            }
        }
        
    }
}
