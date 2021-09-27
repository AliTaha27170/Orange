<?php

namespace App\Http\Controllers;

use App\Models\systing;
use Illuminate\Http\Request;

class SystingController extends Controller
{
   public function pack(Request $request)
   {
      if(auth()->user()->role_id !=1)
        return back();


        systing::find(1)->update(['pak'=>$request['pak']]);
       return redirect(route('tools'));

   }

   public function mzaya(Request $request)
   {
      if(auth()->user()->role_id !=1)
        return back();

        systing::find(1)->update(['mzaya'=>$request['mzaya']]);
       return redirect(route('tools'));

   }

   
   public function tools()
   {
    if(auth()->user()->role_id !=1)
    return back();

       $pak   = systing::find(1)->pak;
       $mzaya = systing::find(1)->mzaya;
      return view ('admin.systing',compact('pak','mzaya'));
   }
}
