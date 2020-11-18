<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inquiry;
use App\Bookservice;
use App\schedule;
use App\newsletter;
use App\post;
use App\banner;
use App\imagetable;
use DB;
use Mail;use View;
use Session;
use App\Http\Helpers\UserSystemInfoHelper;
use App\Http\Traits\HelperTrait;
use Auth;
use App\Profile;


class HomeController extends Controller
{   
    use HelperTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     // use Helper;
     
    public function __construct()
    {
        //$this->middleware('auth');

        $logo = imagetable::
                     select('img_path')
                     ->where('table_name','=','logo')
                     ->first();

        $logo2 = imagetable::
                     select('img_path')
                     ->where('table_name','=','logo2')
                     ->first();
             
        $favicon = imagetable::
                     select('img_path')
                     ->where('table_name','=','favicon')
                     ->first(); 
        
        View()->share('logo',$logo);
        View()->share('logo2',$logo2);
        View()->share('favicon',$favicon);

    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $banner = DB::table('banners')->first();   
        
        $cms_home1 = DB::table('pages')->where('id', 1)->first();
        $service = DB::table('services')->orderBy('id','asc')->get();
        $testimonial = DB::table('testimonials')->get();
        $project = DB::table('projects')->get()->take(4);
        $vdo1 = DB::table('videos')->where('id',1)->first();
        
      
        $featured = DB::table('pages')->where('id', 2)->first();

        $products = DB::table('products')->get()->take(10);

        return view('welcome', compact('banner', 'cms_home1','service','featured','testimonial','project','vdo1'));
    }
    

    public function contactUsSubmit(Request $request)
    {
        $inquiry = new inquiry;
        $inquiry->inquiries_fname = $request->fname;
        $inquiry->inquiries_lname = $request->lname;
        $inquiry->inquiries_email = $request->email;
       // $inquiry->inquiries_phone = $request->phone;
        $inquiry->extra_content = $request->message;
        $inquiry->save();
            
        Session::flash('message', 'Thank you for contacting us. We will get back to you asap'); 
        Session::flash('alert-class', 'alert-success'); 
        return back();
    }

    public function newsletterSubmit(Request $request)
    {
        $is_email = newsletter::where('newsletter_email',$request->email)->count();
        
        if($is_email == 0) {
            
        $inquiry = new newsletter;
        //$inquiry->newsletter_name = $request->name;
        $inquiry->newsletter_email = $request->email;
        //$inquiry->newsletter_message = $request->comment;
        $inquiry->save();
        Session::flash('message', 'Thank you for contacting us. We will get back to you asap'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect('/');
        
        } else {
            Session::flash('flash_message', 'email already exists'); 
            Session::flash('alert-class', 'alert-success'); 
            return redirect('/');
        }
        
    }


    public function Matterport(){

        $innerbanner =DB::table('innerbanners')->where('id',1)->first();
       $matterport = DB::table('pages')->where('id', 3)->first();
       $vdo2 = DB::table('videos')->where('id',2)->first();
       
        return view('matterport',compact('innerbanner','matterport','vdo2'));
    }  
    public function Virtualhouse(){

        $innerbanner =DB::table('innerbanners')->where('id',2)->first();
        $vdo3 = DB::table('videos')->where('id',3)->first();
        $virtual= DB::table('pages')->where('id', 4)->first();

        return view('virtualhouse',compact('virtual','innerbanner','vdo3'));
    }
      public function Virtualtour(){
        $vdo4 = DB::table('videos')->where('id',4)->first();
        $innerbanner =DB::table('innerbanners')->where('id',3)->first();
        $tour= DB::table('pages')->where('id', 5)->first();

        return view('virtualtour',compact('innerbanner','tour','vdo4'));
    }
      public function Hdrphotograph(){
        $innerbanner =DB::table('innerbanners')->where('id',4)->first();
        $project = DB::table('projects')->get()->toArray();
        $Hdr= DB::table('pages')->where('id', 6)->first();
        $testimonial = DB::table('testimonials')->get();

        return view('hdrphotograph',compact('Hdr','innerbanner','project','testimonial'));
    }  
    public function Aerialview(){
        $innerbanner =DB::table('innerbanners')->where('id',5)->first();
        $aerial =DB::table('pages')->where('id', 7)->first();
        $project = DB::table('projects')->get()->toArray();
        $testimonial = DB::table('testimonials')->get();
        
        return view('aerialview',compact('innerbanner','project','testimonial','aerial'));
    } 
     public function Industries(){

        $innerbanner =DB::table('innerbanners')->where('id',6)->first();
        $industries =DB::table('pages')->where('id', 8)->first();
        $service = DB::table('services')->skip(4)->take(6)->get();

        return view('industries',compact('innerbanner','industries','service'));
    }  
    public function Preparation(){
        $innerbanner =DB::table('innerbanners')->where('id',7)->first();
        $preparation =DB::table('pages')->where('id', 9)->first();
        $heading =DB::table('pages')->where('id', 10)->first();

        return view('preparation',compact('innerbanner','preparation','heading'));
    }
    public function Bookservices(){

        $innerbanner =DB::table('innerbanners')->where('id',8)->first();
        $book =DB::table('pages')->where('id', 10)->first();

        return view('bookservices',compact('innerbanner','book'));
    }


        public function BookService(Request $request)
    {
        $book = new Bookservice;
        $book->name = $request->name;
        $book->email = $request->email;
        $book->service = $request->service;
        $book->date = $request->date;
        $book->comment = $request->comment;
        $book->save();
            
        Session::flash('message', 'Thank you for contacting us. We will get back to you asap'); 
        Session::flash('alert-class', 'alert-success'); 
        return back();
    }

    public function Faq(){
            $innerbanner =DB::table('innerbanners')->where('id',9)->first();
            $cms_faq =DB::table('pages')->where('id', 12)->first();
            $faq =DB::table('faqs')->get();
        return view('faq',compact('innerbanner','cms_faq','faq'));
    }
    public function About(){
        $innerbanner =DB::table('innerbanners')->where('id',10)->first();
        $cms_home1 = DB::table('pages')->where('id', 1)->first();
        $footer_about =DB::table('pages')->where('id', 13)->first();
        return view('about',compact('cms_home1','about','innerbanner','footer_about'));
    }
   
}
