<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\Home;
use App\Models\logo;
use App\Models\Team;
use App\Models\About;
use App\Mail\SendMail;
use App\Models\Career;
use App\Models\Config;
use App\Models\contact;
use App\Models\Service;
use App\Models\web_cms;
use App\Models\Category;
use App\Models\Platform;
use App\Models\our_service;
use App\Models\cms_contacts;
use App\Models\services_faq;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Console\Input\Input;

class HomeController extends Controller
{

    public function index()
    {

        return view('home.index');
    }

    public function about()
    {

        $team = Team::take(4)->orderBy('id', 'ASC')->get();
        return view('home.about', compact('team'));
    }


    public function service()
    {

        $service = our_service::with('get_category')->get();
        return view('home.service', compact('service'));
    }

    public function service_details($id)
    {


        $category = Category::all();
        $service_faqs = services_faq::with('service_category')->get();
        $service_detail = our_service::find($id);
        return view('home.service_details', compact('category', 'service_faqs', 'service_detail'));
    }



    public function blog()
    {

        $config = [];
        $config['contact_number'] = web_cms::where('slug', 'contact_number')->where('tag', 'config')->first();
        $config['address'] = web_cms::where('slug', 'address')->where('tag', 'config')->first();
        $config['email_address'] = web_cms::where('slug', 'email_address')->where('tag', 'config')->first();
        $config['facebook_link'] = web_cms::where('slug', 'facebook_link')->where('tag', 'config')->first();
        $config['copy_right'] = web_cms::where('slug', 'copy_right')->where('tag', 'config')->first();
        $config['instagram_link'] = web_cms::where('slug', 'instagram_link')->where('tag', 'config')->first();
        $config['twitter_link'] = web_cms::where('slug', 'twitter_link')->where('tag', 'config')->first();
        $config['youtube_link'] = web_cms::where('slug', 'youtube_link')->where('tag', 'config')->first();
        $config['tiktok_link'] = web_cms::where('slug', 'tiktok_link')->where('tag', 'config')->first();

        $logo = [];
        $logo['favicon'] = web_cms::where('slug', 'favicon')->where('tag', 'logo-favicon')->first();
        $logo['logo-white'] = web_cms::where('slug', 'logo-white')->where('tag', 'logo-favicon')->first();
        $logo['logo-black'] = web_cms::where('slug', 'logo-black')->where('tag', 'logo-favicon')->first();

        $data = blog::all();
        return view('home.blog', compact('logo', 'config', 'data'));
    }

    public function blog_details($id)
    {
        $logo = [];
        $logo['favicon'] = web_cms::where('slug', 'favicon')->where('tag', 'logo-favicon')->first();
        $logo['logo-white'] = web_cms::where('slug', 'logo-white')->where('tag', 'logo-favicon')->first();
        $logo['logo-black'] = web_cms::where('slug', 'logo-black')->where('tag', 'logo-favicon')->first();

        $config = [];
        $config['contact_number'] = web_cms::where('slug', 'contact_number')->where('tag', 'config')->first();
        $config['address'] = web_cms::where('slug', 'address')->where('tag', 'config')->first();
        $config['email_address'] = web_cms::where('slug', 'email_address')->where('tag', 'config')->first();
        $config['facebook_link'] = web_cms::where('slug', 'facebook_link')->where('tag', 'config')->first();
        $config['copy_right'] = web_cms::where('slug', 'copy_right')->where('tag', 'config')->first();
        $config['instagram_link'] = web_cms::where('slug', 'instagram_link')->where('tag', 'config')->first();
        $config['twitter_link'] = web_cms::where('slug', 'twitter_link')->where('tag', 'config')->first();
        $config['youtube_link'] = web_cms::where('slug', 'youtube_link')->where('tag', 'config')->first();
        $config['tiktok_link'] = web_cms::where('slug', 'tiktok_link')->where('tag', 'config')->first();

        $data = blog::find($id);
        return view('home.blog-details', compact('logo', 'config', 'data'));
    }
    public function career()
    {

        $platform = Platform::all();
        return view('home.career', compact('platform'));
    }

    public function contact()
    {

        return view('home.contact');
    }

    public function contact_post(Request $request)
    {
        $data = new contact();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone_no=$request->phone_no;
        $data->subject=$request->subject;
        $data->message=$request->message;
        $data->save();

        return redirect()->route('contact')->with('success','Thank you for Contact');

    }


    // public function contact_post(Request $request)
    // {
    //     $request->validate([
    //         'name'     => 'required',
    //         'email'     => 'required|email|unique:users,',
    //         'subject'   => 'required',
    //         'phone_no'      => 'required|max:150',
    //         'message'      => 'required|max:150'
    //     ]);

    //     contact::create([
    //         'name'   => $request->name,
    //         'email'   => $request->email,
    //         'subject' => $request->subject,
    //         'phone_no'    => $request->phone_no,
    //         'message'    => $request->message
    //     ]);

    //     // $user['to']='manus2201a@gmail.com';
    //     Mail::send('home.demo', array(
    //         'name' => $request->get('name'),
    //         'email' => $request->get('email'),
    //         'phone_no' => $request->get('phone_no'),
    //         'subject' => $request->get('subject'),
    //         'message' => $request->get('message'),

    //     ), function ($message){
    //         // $message->from($data['email']);
    //         $message->to('manus2201a@gmail.com');
    //         $message->subject('Hospital Care');
    //     });

    //     return redirect()->route('contact')->with('success', 'Thank you for Contact');
    // }


    public function team()
    {

        $team = Team::all();
        return view('home.team', compact('team'));
    }

    public function price()
    {
        $logo = [];
        $logo['favicon'] = web_cms::where('slug', 'favicon')->where('tag', 'logo-favicon')->first();
        $logo['logo-white'] = web_cms::where('slug', 'logo-white')->where('tag', 'logo-favicon')->first();
        $logo['logo-black'] = web_cms::where('slug', 'logo-black')->where('tag', 'logo-favicon')->first();

        return view('home.price', compact('logo'));
    }
}
