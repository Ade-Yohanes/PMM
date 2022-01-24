<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Slider;
use App\About;
use App\Service;
use App\Category;
use App\AreaPengiriman;

use Illuminate\Support\Facades\DB;





class FrontendController extends Controller
{
    
    public function home() {


        $data =slider::all();

        $area = AreaPengiriman::all();


        return view('home', compact('data', 'area' ));
    }

    public function about() {

        // $data['about'] = about::find( $id )->first();

        // $data = about::find(1);
    //    $data =about::find(1)->value('title');

        $data = DB::table('about')->find(1);

        $area = AreaPengiriman::all();


        
        // return view('about' )->with( 'about', $data  );

        return view('about', compact('data', 'area' ) );

    }

    public function service() {

        $data = Service::find(2);

        $area = AreaPengiriman::all();

        return view('service' , compact('data', 'area' ) ) ;
    }

    public function contact() {

        $service = Service::all();

       
        return view('contact',compact('service') );

        // return view('contact');

    }

    public function service_detail($slug) {

    //    $data = Service::all();

    //    $data = Service::find($slug);

        $data = Service::with(['category'])->where('slug', $slug )->first();

        $service = Service::all();

        $area = AreaPengiriman::all();


        return view('service_detail', compact('data','service', 'area' ) ) ;
        // return view('service_detail', compact('data') ) ;

    }
    

    public function service_detail_test($id){

        // $data = Service::with(['category'])->where('id', $id )->first();

        // $data = Service::find($id);

        // $service = Service::all();


        $data = Service::find($id)
                    ->with('category')
                    ->where('id', '=', $id)
                    ->get();


        return view('service_detail_test',compact('data') );
    }


}
