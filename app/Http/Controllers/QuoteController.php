<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;

use App\Job_order ;

use App\Mail\Quotation;

use Mail;

class QuoteController extends Controller
{

    public function contact() {

        $service = Service::all();

       
        return view('contact',compact('service') );

        // return view('contact');

    }




    public function store( Request $request )

    {

        // if(count ($request->all()) >0) {
        //     dd('data ada ');
        //     }
        //     else { dd(' data ga ada ');
        //      } 

        // dd($request->all());

       $validateData= $request->validate(  [
            'nama' => 'required',
            'email' => 'required|email',
            'perusahaan' => 'required',
            'phone' => 'required',
            'service' => 'required',
            'lampiran' => 'required|file|max:1000',
            'pesan' => 'required',
        ]);

        // dd($request->all());


        // $input = $request->all();


        //  Job_orders::create($input);


       
        Job_order::create( $validateData );

        
        Mail::send('quotationMail',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'perusahaan' => $request->get('perusahaan'),
            'phone' => $request->get('phone'),
            'service' => $request->get('service'),
            'lampiran' => $request->get('lampiran'),
            'pesan' => $request->get('pesan')
        ), function($message)
    {
        $message->from('$request->email ');
        $message->to('$request->email', 'Admin')->subject('Request Order ');
    });
        
        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);

        // dd('success', 'Thank you for contacting me!');


    }

    
}
