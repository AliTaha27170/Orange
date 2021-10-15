<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Email;
use App\Event;
use App\InSand;
use App\Models\Comment;
use App\Models\Friend;
use App\Models\Light;
use App\Models\Question;
use App\Models\systing;
use App\Models\User;
use App\Models\Visit;
use App\Pakage;
use Mail;
use Composer\Package\Package;
use Illuminate\Http\Request;

class PageController extends Controller
{

// START index >>>>>>>
    public function index () {
        $events    = Event::where('home_page', 1 )->paginate(50);
        $lights    = Light::where('home_page', 1 )->paginate(50);
        $in_sand   = InSand::get();
        $questions = Question::get();
        $comments  = Comment::get();
        $friends   = Friend::get();
        $visits    = Visit::get();
        $mzaya     = systing::find(1)->mzaya;

              return view('index')->with([
            "events"      => $events ,
            "lights"      => $lights ,
            "in_sand"     => $in_sand ,
            "mzaya"       => $mzaya ,
            "questions"   => $questions ,
            "visits"   => $visits ,
            "friends"   => $friends ,
            "comments"   => $comments ,
        ]);
    }
// END index >>>>>>>

// START events >>>>>
public function events()
{
    $events = Event::orderBy('finish')->paginate(6);
    return view('events')->with([
        "events" => $events ,
    ]);
}
// END events




// START search >>>>>
public function search(Request $request)
{
    $events = Event::where('title_ar','like','%' .$request['search'].'%')
    ->orWhere('title_en','like','%' .$request['search'].'%')
    ->orWhere('description_ar','like','%' .$request['search'].'%')
    ->orWhere('description_en','like','%' .$request['search'].'%')
    ->orWhere('who','like','%' .$request['search'].'%')
    ->orderBy('finish')->paginate(50);

    $lights = Light::where('title_ar','like','%' .$request['search'].'%')
    ->orWhere('title_en','like','%' .$request['search'].'%')
    ->orWhere('description_ar','like','%' .$request['search'].'%')
    ->orWhere('description_en','like','%' .$request['search'].'%')
    ->orderBy('id','DESC')->paginate(50);

    return view('search')->with([
        "events"      => $events ,
        "lights"      => $lights ,
        "search_word" => $request['search'] ,
    ]);
}
// END events

// START Lights >>>>>
public function lights()
{
    $lights = Light::orderBy('id','DESC')->paginate(6);
    return view('lights')->with([
        "lights" => $lights ,
    ]);
}
// END lights


// START register_now >>>>>
public function register_now()
{
    $pak = systing::find(1)->pak;
    return view('sandPak',compact('pak'));
}
// END register_now


// START register_now_post >>>>>
public function register_now_post()
{
    $id = auth()->user()->id;
    User::find($id)->update(
        [
            "Package" => 1
        ]
        );
    Pakage::create([
        "user_id" => $id
    ]);

    $data = array('msg'=>"اشتراك جديد من قبل " . auth()->user()->name );

    Mail::send('email.mail', $data, function($message) {
        $message->to('info@sand.business')->subject
           ('اشتراك جديد بباقة مجتمع سند');
        $message->from('admin@sand.business','Sand');
     });
    return back()->with(["msg" => __('main_page.s3daa')]);

}
// END register_now


//contact >>>>>>>
public function contact()
{
   return view('contact');
}
//contact >>>>>>>




//contact_post >>>>>>>
public function contact_post(Request $request)
{
    Contact::create([
        "name" => $request['name'] ,
        "email" => $request['email'] ,
        "subject" => $request['subject'] ,
        "message" => $request['message'] ,
    ]);
    $data =
    [
        "subject" =>  'رسالة جديدة من      '. $request['name'] ,
        "msg" =>  'العنوان : '. $request['subject'] . '<br><br>' .  $request['email'] . '<br><br>' . $request['message'],
    ];

Mail::send('email.email', $data, function($message) use ($data) {
    $message->to('info@sand.business')->subject
       ($data['subject']);
    $message->from('admin@sand.business','Sand');
 });

   return back()->with(["msg" => __('main_page.tm') ]);


}
//contact_post >>>>>>>




//contact_post >>>>>>>
public function mail_post(Request $request)
{
    Email::create([
        "email" => $request['email']
     ]);
    return back()->with(["msg" => "شكراً لاشتراكك  بنشرتنا " ]);
}
//contact_post >>>>>>>


}
