
{{-- قاعة التدريب  --}}
<form method="POST" action="{{ route('booking') }}" class="form-card" name="myForm">
    @csrf
        <fieldset class="form-fieldset">

        <legend class="form-legend">
            <center style="margin-left: 7.5%">
             @if ($id==1)
                <h2>حجز قاعة الاجتماعات </h2>
             @elseif($id==2)
                <h2>حجز  قاعة التدريب  </h2>
                @elseif($id==3)
                <h2>حجز  مكتب مستقل</h2>
                @else
                <h2>مقعد دراسي </h2>

             @endif
        </center>
           </legend>
           <center><h5 id="error" class="form--hint" style="color:#dc3545">{{ request()->cookie("error") }}</h5></center>

        <div class="form-element form-input">
            <p class="bold" >تاريخ الحجز</p>

            <input id="field-uyzeji-352rnc-4rv3g1-bvlh88-9dewuz"  required type="date" name="date" />
<hr>            </div>

<input name="type" value="{{ $id }}" style="display: none">
        <div class="form-element form-select">
            <p class="bold" >توقيت الحجز  </p>

            <select  class="ield" name="start_time" id="start_time" required style="width: 35%">
                <option disabled selected value="" class="form--"></option>
                <option value="8">8 صباحاً </option>
                <option value="9">9 صباحاً </option>
                <option value="10">10 صباحاً </option>
                <option value="11">11 صباحاً </option>
                <option value="12">12 مساءً </option>
                <option value="13">1  مساءً </option>
                <option value="14">2  مساءً  </option>
                <option value="15">3  مساءً  </option>
                <option value="16">4 مساءً  </option>
                <option value="17">5 مساءً  </option>
                <option value="18">6 مساءً  </option>
                <option value="19">7 مساءً  </option>
                <option value="20">8 مساءً  </option>
                <option value="21">9 مساءً  </option>
                <option value="22">10 مساءً  </option>



            </select>
            <hr>
        </div>


        <div class="form-element form-select">
            <span class="bold" style="margin-right: 25px; ">           مدة الحجز  </span> <p style="display: inline ; margin-right:85px; color:#6c757d; ">  باقات سند  </p>









<div style="display: none">
<input name="main_price" id="main_price">
<input name="event" id="event">
<input name="main_Duration" id="main_Duration">

</div>




            <div class="cntr">
                <label for="rdo-1" class="btn-radio" style="margin-top: 20px">
                  <input type="radio" id="rdo-1" name="Duration" value="1" onchange="myFunction2(this.value)">
                  <svg width="20px" height="20px" viewBox="0 0 20 20" style="margin-right: 20px">
                    <circle cx="10" cy="10" r="9"></circle>
                    <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
                    <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
                  </svg>
                  <span class="span">           ساعة وحدة   </span>  <p class="sanad"  >350  SR </p>
                </label>


                <label for="rdo-2" class="btn-radio">
                  <input type="radio" id="rdo-2" name="Duration" value="6" onchange="myFunction2(this.value)" >
                  <svg width="20px" height="20px" viewBox="0 0 20 20">
                    <circle cx="10" cy="10" r="9"></circle>
                    <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
                    <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
                  </svg>
                  <span class="span">           6 ساعات  </span>  <p class="sanad"  >1900 SR </p>
                </label>

                <label for="rdo-3" class="btn-radio">
                  <input type="radio" id="rdo-3" name="Duration" value="10"  onchange="myFunction2(this.value)">
                  <svg width="20px" height="20px" viewBox="0 0 20 20">
                    <circle cx="10" cy="10" r="9"></circle>
                    <path d="M10,7 C8.34314575,7 7,8.34314575 7,10 C7,11.6568542 8.34314575,13 10,13 C11.6568542,13 13,11.6568542 13,10 C13,8.34314575 11.6568542,7 10,7 Z" class="inner"></path>
                    <path d="M10,1 L10,1 L10,1 C14.9705627,1 19,5.02943725 19,10 L19,10 L19,10 C19,14.9705627 14.9705627,19 10,19 L10,19 L10,19 C5.02943725,19 1,14.9705627 1,10 L1,10 L1,10 C1,5.02943725 5.02943725,1 10,1 L10,1 Z" class="outer"></path>
                  </svg>
                  <span class="span">           10 ساعات  </span>  <p class="sanad"  >3300 SR </p>
                </label>


              </div>
<hr>
                            {{-- ساعات مخصصة      --}}
              <br>
              <p >او يمكنك اختيار عدد الساعات التي تناسبك , مع العلم  أن َّ قيمة الساعة الواحدة 350 SR .. </p>
              <p class="sanad" id="p2"> </p>
              <input type="number" style="width: 70px ; margin:5px; margin-right:18px" id="co_price"

              onchange="price(this.value)" min="1" max="13"
              >
              <hr>


        {{-- نوع  الفعالية   --}}

              <span class="bold"  style="margin-right: 25px;      ">               تصنيف الفعالية : </span>




            <select id="field-be1h8i-ll2hpg-q4efzm-nfjj1e-udkw5r" class="formfield"  name="Duration" required style="width: 35%"
            onchange="myFunction6(this.value)">
            <option disabled selected value="" class="form-select-placeholder"></option>
            <option value="لقاء">لقاء </option>
            <option value="حفلة"> حفلة  </option>
            <option value="ندوة"> ندوة </option>
            <option value="ورشة عمل">ورشة عمل  </option>
            <option value="أخرى"> أخرى  </option>

        </select>
            <input type="text" class="event" placeholder=" التصنيف " id="input" style="display: none" onchange="myFunction7(this.value)">
            <hr>


            <script>   {{--    الفعالية _  إخفاء ظهور    --}}
                function myFunction6(val) {
                    if (val == "أخرى" )
{                       document.getElementById("input").style.display="block";
                    document.getElementById("event").value=null;





}
                    else
                    {document.getElementById("input").style.display="none";
                    document.getElementById("event").value=val;

                }
                 }

                 function myFunction7(val) {
                    document.getElementById("event").value=val;
                 }
                </script>


                <script>   {{--  السعر      --}}
                    function price(val)

{
    $("input:radio").removeAttr("checked");
    if (val == 6 )
{        document.getElementById("p2").innerHTML = 1900 + " SR";
    document.getElementById("main_price").value=1900;
    document.getElementById("main_Duration").value=val;
}
    else if (val == 10 )
    {        document.getElementById("p2").innerHTML = 3300 + " SR";
    document.getElementById("main_price").value=3300;
    document.getElementById("main_Duration").value=val;

}
   else if (val == 12 )
   {        document.getElementById("p2").innerHTML = 3800 + " SR";
   document.getElementById("main_price").value=3800;
   document.getElementById("main_Duration").value=val;

}
    else
    {
        document.getElementById("p2").innerHTML = val*350 + " SR";
        document.getElementById("main_price").value=val*350;
        document.getElementById("main_Duration").value=val;
    }
}

                    </script>


                    <script>   {{-- 2 السعر      --}}
                        function myFunction2(val)

    {
        document.getElementById("p2").innerHTML = "";
        document.getElementById("co_price").value = null;

        if (val ==1 )
{            document.getElementById("main_price").value=350;
        document.getElementById("main_Duration").value=val;}

        else if ( val==6)
{            document.getElementById("main_price").value=1900;
        document.getElementById("main_Duration").value=val;}

        else if (val ==10)
{            document.getElementById("main_price").value=3300;
        document.getElementById("main_Duration").value=val;
}





    }

                        </script>



                        <div class="form-element form-textarea">
                            <p class="bold" >نبذة عن  الفعالية</p>
                            <textarea required id="description" placeholder=" " name="description" minlength="3" maxlength="100" style="width: 55%"></textarea>
                                <hr>
                        </div>
                        <div><center><p class="choice" style="width:auto;  font-size:13px;text-align:right">بإكمالك تسجيل الحجز أنت توافق على شروطنا التالية :   <br>
                            1-يجب الإلتزام بالوقت المحدد .  <br>
                            2- يجب الحرص على نظافة المكان .  <br>
                            3- يجب الإلتزام بالأدب والذوق العام .  <br>
                            4- إذا تم إلغاء الحجز قبل التاريخ المحدد بـ 48 ساعة يتم إرجاع المبلغ كاملاً وفي حال تم إلغاء الحجز قبل التاريخ المحدد بـ 24 ساعة لا يتم إرجاع المبلغ.
                      <hr>
                      <input type="checkbox" id="agree" name="agree" value="" required >
                      <label for="agree" style="font-size: 12px; padding-bottom:3px"> أوافق على جميع الشروط . </label>
                      </p>

                    </fieldset>

                  <center>  <input type="button"  onclick="validateAndSend()" value="حجز "  style="margin-bottom: 70px; background-color:#ff6700" class="form-btn" type="submit" style="color: #ff6700"> </center>

                    <style>
                        .form-btn:hover{
                            background-color: #34312e !important;
                        }
                    </style>



                </form>


{{-- التحقق  --}}


<script>
function validateAndSend() {
    var x=  Number(myForm.start_time.value) ;
    var y=  Number(myForm.main_Duration.value) ;


    if ( myForm.main_Duration.value    == '' ||  myForm.main_Duration.value >13 || myForm.main_Duration.value <0)
    {
        alert('تحقق من صحة  "مدة الحجز " , يجب أن تأخذ قيمة من ال 1 لل 13 .');
        return false;

    }
    else if (myForm.event.value    == '')
    {
        alert('الرجاء اختيار تصنيف للفعالية');
        return false;
    }



    else if (myForm.date.value    == '')
    {
        alert('الرجاء اختيار تاريخ  للحجز ');
        return false;
    }

    else if (myForm.start_time.value    == '' )
    {
        alert('الرجاء اختيار توقيت الحجز ');
        return false;
    }

    else if ( x+y   >24  ){
        alert("مدة الحجز خارج مدة الدوام !! ");
        return false;

    }

    else if (myForm.description.value    == '' )
    {
        alert('الرجاء كتابة نبذة عن الفعالية  ');
        return false;
    }


    else  if(document.getElementById('agree').checked == false)
    {
        alert(' للاستمرار الرجاء  الموافقة على الشروط الخاصة بنا ');
        return false;
    }

    else {
        myForm.submit();
    }



}
</script>

