<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;

use App\Job_order ;

use App\Mail\Quotation;

use Illuminate\Support\Facades\Mail;


// use Mail;

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


        $input = $request->all();


         Job_order::create($input);


       
        // Job_order::create( $validateData );

        $data = array(
            'nama'=> $request->nama,
            'email'=> $request->email,
            'perusahaan'=> $request->perusahaan,
            'phone'=> $request->phone,
            'service'=> $request->service,
            // 'lampiran'=> $request->lampiran,
            'lampiran' => $request->file('lampiran')->store( 'public'),
            'pesan' => $request->pesan
        );



        \Mail::to('prajamitra.it@gmail.com')->send(new Quotation ($data));
        
        return redirect()->back()->with(['success' =>' Your Mail has been received']);

        // return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);

        // $files = $request->file('lampiran');

        // \Mail::send('emails.quotationMail', compact('data'), function ($message) use($data, $files){    
        //     $message->from($data['email']);
        //     $message->to('prajamitra.it@gmail.com')->subject($data['perusahaan'] . ' - ' .$data['service']);

        //     if(count($files > 0)) {
        //         foreach($files as $file) {
        //             $message->attach($file->getRealPath(), array(
        //                 'as' => $file->getClientOriginalName(), // If you want you can chnage original name to custom name      
        //                 'mime' => $file->getMimeType())
        //             );
        //         }
        //     }
        // });

        
    //     Mail::send('quotationMail',
    //     array(
    //         'name' => $request->get('name'),
    //         'email' => $request->get('email'),
    //         'perusahaan' => $request->get('perusahaan'),
    //         'phone' => $request->get('phone'),
    //         'service' => $request->get('service'),
    //         'lampiran' => $request->get('lampiran'),
    //         'pesan' => $request->get('pesan')
    //     ), function($message)
    // {
    //     $message->from('dont-reply@prajamitramandiri.com');
    //     $message->to(' prajamitra.it@gmail.com ', 'Admin')->subject('Request Order ');
    // });

   

        

        //  Mail::to('dont-reply@prajamitramandiri.com')->send( new Quotation( $validateData ) );
        
        // return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);

        // dd('success', 'Thank you for contacting me!');


    }

    

    
}
