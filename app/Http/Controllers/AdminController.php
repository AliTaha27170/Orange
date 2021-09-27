<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    


//قاعة الاجتماعات
    public function room1()
    {
            $inf=Booking::where("department_id",1)->orderBy("date","ASC");

    }
//قاعة التدريب
    public function room2()
    {
            return view("admin.room2");

    }


    //مكتب بالساعات
    public function room3()
    {
            return view("admin.room3");

    }

        //مكتب بالشهر
    public function room4()
    {
            return view("admin.room4");

    }

            //حجز جديد
    public function new_booking($id)
    {
            return view("admin.all_room");

    }



    public function room($id)
    {
        if(auth()->user()->role_id !=1 )
        return back();

             if($id==1)
                $inf=Booking::where("department_id",1)->where("stute",1)->orderBy("date","DESC")->limit(100)->get();

                elseif($id==2)
                $inf=Booking::where("department_id",2)->where("stute",1)->orderBy("date","DESC")->limit(100)->get();

                elseif($id==3)
                $inf=Booking::where("department_id",3)->where("stute",1)->where("Duration","!=",0)->orderBy("date","DESC")->limit(100)->get();

                elseif($id=4)
                $inf=Booking::where("department_id",3)->where("stute",1)->where("Duration",0)->orderBy("date","DESC")->limit(100)->get();
                //stute 2 wait
                else if(1==9)
                $inf=Booking::where("read",0)->where("stute",1)->orderBy("date","DESC")->limit(100)->get();

            return view("admin.room",with(["inf" => $inf  , "id" => $id]));

    }

    public function delete_user(User $id){
        if(auth()->user()->role_id !=2 )
        return back();


       if ( $id->id == auth()->user()->id )
        echo "<script>alert('عذراً لايمكنك حذف الأدمن !! ') </script>";

        elseif(count ($id->booking))
        {
                echo "<script>alert('المستخدم لديه حجوزات , قم بحذف الحجوزات الخاصة به ومن ثم كرر المحاولة !!  ') </script>";
        }



        else
        {

        if(count ($id->events))
        {

                foreach($id->events as $item)
                        $item::destroy($item->item);
                }

                $id::destroy($id->id);

                return back();
        }



    }


    public function delete(Booking $id){

        if(auth()->user()->role_id !=1 )
        return back();
        
        foreach($id->bookingours as $del )
                $del::destroy($del->id);
         $id->update(['stute' => 0]);
        return back();

    }

    public function profile( User $id)
    {
            return redirect(route('voyager.users.show',$id));
    }





}
