<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;

use App\Job_orders ;

// use App\Mail\Quotation;

class QuoteController extends Controller
{

    public function contact() {

        $service = Service::all();

       
        return view('contact',compact('service') );

        // return view('contact');

    }


    public function quote_form( Request $request ) {



        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'perusahaan' => 'required',
            'phone' => 'required',
            'service' => 'required',
            'pesan' => 'required',
        ]);

        $input = $request->all();

        

        Job_orders::create($input);

        //  Send mail to admin
        \Mail::send('contactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'perusahaan' => $input['perusahaan'],
            'phone' => $input['phone'],
            'service' => $input['service'],
            'lampiran' => $file['lampiran'],
            'pesan' => $input['pesan'],

            
            // $path = request()->file('lampiran')->store('lampiran');
            // $quote_form->lampiran = $path;

            
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to(' prajamitra.it@gmail.com ', 'Admin')->subject($request->get('subject'));
        });

        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
        
        // return dd($input);
    
    

    }


    public function quote_store( request $request )

    {

        if(count ($request->all()) >0) {
            dd('data ada ');
            }
            else { dd(' data ga ada ');
             } 

        // dd($request->all());

        $this->validate( $request, [
            'nama' => 'required',
            'email' => 'required|email',
            'perusahaan' => 'required',
            'phone' => 'required',
            'service' => 'required',
            'lampiran' => 'required|file|size:5000',
            'pesan' => 'required',
        ]);

        // dd($request->all());


        // $input = $request->all();


        //  Job_orders::create($input);


       

         Job_orders::create($request->all());


        // $form = new Job_orders ;

        // $form->nama = $request->nama;
        // $form->email = $request->email;
        // $form->perusahaan = $request->perusahaan;
        // $form->phone = $reque->phone;
        // $form->service = $request->service;
        // $form->lampiran = $request->lampiran;
        // $form->pesan = $request->pesan;

        // $form->save();

        Mail::send('email',
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

        dd('success', 'Thank you for contacting me!');


    }


    public function contactPost(Request $request) 
    {
     $this->validate($request, [ 
            'nama' => 'required',
            'email' => 'required|email',
            'perusahaan' => 'required',
            'phone' => 'required|min:6|numeric ',
            'service' => 'required',
            'lampiran'=> 'required|file|size:5000',
            'pesan' => 'required',
    ]);
    Job_orders::create($request->all());
 
     Mail::send('email',
        array(
            'nama' => $request->get('nama'),
            'email' => $request->get('email'),
            'perusahaan' => $request->get('perusahaan'),
            'phone' => $request->get('phone'),
            'service' => $request->get('service'),
            'lampiran' => $request->get('lampiran'),
            'pesan' => $request->get('pesan')
        ), function($message)
    {
        $message->from('dont-reply@prajamitramandiri.com');
        $message->to(' prajamitra.it@gmail.com ', 'admin')->subject('Bobby Site Contect Form');
    });
    //  return back()->with('success', 'Thank you for contacting me!'); 

      return dd('success', 'Thank you for contacting me!');
    }

   

    
}
