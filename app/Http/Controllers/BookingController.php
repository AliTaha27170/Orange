<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Bookingtime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use Mail ;
use App\Http\Controllers\Controller;


/*
            -1-
use Illuminate\Support\Facades\Cookie;
            Cookie::queue("_ged", $value, $minutes);
            request()->cookie("_ged")

            -2-
use Symfony\Component\HttpFoundation\Cookie;
    $cookie = cookie('name', 'value', $minutes);
    $value = $request->cookie('name');

*/

class BookingController extends Controller
{
    public function storeTest(Request $request){
        $x= Booking::get()->sortByDesc('id')->first();
        echo $x->bookingours->sortbyDesc('id')->first();
    }


    public function store(Request $request)
    {
        // كامل  حجز المكتب ليوم
        if($request->type ==3 and $request->main_Duration==24 )
        {
            $start="8";
            $str_len=Str::length($start);
            $request->main_Duration = 14;
            $duration= $request->main_Duration;
        }


        else{

            $start=$request["start_time"];
            $str_len=Str::length($start);
            $duration= $request->main_Duration;
        }



        //تحويل الوقت
        if($request["am"]=="am")
            {
                if($str_len==2)
                    $startTime="$start:00";
                else
                    $startTime="0$start:00";
            }
        else
        {
            if($start==12)
                $startTime="$start:00";
                else if($start==1)

                $startTime="13:00";

                else if($start==2)
                $startTime="14:00";

                else if($start==3)
                $startTime="15:00";

                else if($start==4)
                $startTime="16:00";

                else if($start==5)
                $startTime="17:00";

                else if($start==6)
                $startTime="18:00";

                else if($start==7)
                $startTime="19:00";

                else if($start==8)
                $startTime="20:00";

                else if($start==9)
                $startTime="21:00";

                else if($start==10)
                $startTime="22:00";

                else
                $startTime="24:00";



        }
        //يلغي الكود الفوق (الكود الي فوق احتياط )
        if($str_len==2)
            $startTime="$start:00";
        else
            $startTime="0$start:00";

        $startTime="$startTime:00";



        //إضافة وقت الانتهاء
        if((intval($startTime)+intval($duration)) > 24) {
            // مدة الحجز , خارج مدة الدوام
            Cookie::queue( "error","مدة الحجز خارج فترة الدوام ! ",0.1 );
            return back();

        }
        else
        {
            //echo "time allowed ";

            $endTime=intval($startTime)+intval($duration);
            if(Str::length($endTime)==2)
                $endTime="$endTime:00";
            else
                $endTime="0$endTime:00";
        }
//التحقق من عدم تعارض المواعيد
$booking_mains=Booking::where("date","=",$request->date)->get();
foreach($booking_mains as $booking_main){
    if(isset( $booking_main->bookingours) and ($booking_main->department_id ==$request->type))
    foreach(( $booking_main->bookingours) as $hour) {
        if($hour->time == $startTime ){
            Cookie::queue( "error","مساحة العمل محجوزة بهذا الوقت ! ",0.1);
            return back();

        }
    }
}





//إنشاء حجز  جديد
        Booking::create([
            "date" => $request->date ,
            "start_time"    =>  $startTime ,
            "Duration"      =>  $duration ,
            "end-time"      =>  $endTime   ,  //
            "user_id"       =>  auth()->user()->id , //
            "department_id" =>  $request->type  ,//????????????
            "description"   =>  $request->description ,
            "stute"         =>1 , // 1 Active
            "price"         => $request->main_price,
            "event"         => $request->event,
            "read"          =>0
        ]);
        Cookie::queue( "price","$request->main_price",0.1 );
        if($request->description==0)
        Cookie::queue( "month","yes",0.01 );



        //إضافة ساعات الحجوزات
            $id=Booking::get()->sortByDesc('id')->first()->id;
            echo $id;
    for($i=0 ; $i<$duration ; $i++)
    {
        $stTime=intval($startTime)+$i;
        if(Str::length($stTime)==2)
            $stTime="$stTime:00";
        else
            $stTime="0$stTime:00";
            echo $stTime;

        Bookingtime::create([
            "time"=> $stTime,
            "booking_id"=>$id,

        ]);

    }

    if($request->type == 1)
        $m ="لقاعة الاجتماعات ";
        else  if($request->type == 2)
        $m ="لقاعة التدريب ";
        else  if($request->type == 3)
        $m ="للمكتب ";

        $data =
        [
            "subject" =>  'حجز  جديد   '.$m ,
            "msg" =>  'تم الحجز من قبل '. auth()->user()->name ,
        ];

    Mail::send('email.booking', $data, function($message) use ($data) {
        $message->to('info@sand.business')->subject
           ($data['subject']);
        $message->from('admin@sand.business','Sand');
     });

    Cookie::queue( "done"," <script> alert('تم الحجز بنجاح .. ' )</script>",0.1 );

    return back()->with('error', "تم الحجز بنجاح .. " );


    }
}
