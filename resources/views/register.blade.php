@extends('include.app')

@section('main')




@if(isset($error) )
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <ul class="p-0 m-0" style="list-style: none;">

        <li>{{$error}}</li>

    </ul>
</div>
@endif



<!-- فورم التعبئة -->
<div class="contact-form-sec pt-5 mt-md-5 ContactPageForm rt">
    <div class="title-heading-w3 text-center mx-auto mb-5" style="max-width:600px">
        @if (isset(auth()->user()->name))
        <h3 class="title-style">{{ __('main_page.a160') }} <br><span>{{auth()->user()->name }} </span></h3>
        @else
        <h3 class="title-style">{{ __('main_page.a158') }} <br><span>{{ __('main_page.a26') }} </span></h3>
        <a href="{{ route('voyager.login') }}" style="font-size: 18px"> <br> {{ __('main_page.a165') }} </a>

        @endif

    </div>

    @if (session('error'))
      <div class="alert alert-danger">
          <center>
              <p>

                {!! session('error') !!}

              </p>

          </center>
      </div>
@endif

    @if($errors->any())
<h4>{{$error}}</h4>
@endif


    <div class="row contact-block align-items-center">
        <div class="col-md-9 contact-right mt-md-0 mt-4 pl-lg-4 m-auto">
            <form action="{{ route('RegisterPost') }}" method="post" class="signin-form">
                @csrf
                <div class="input-grids">

                    <input value="{{ isset(auth()->user()->name) ? auth()->user()->name : '' }}" type="text" name="name" id="الاسم" placeholder="{{ __('main_page.a38') }}*" class="contact-input" required="" maxlength="20">

                    <input value="{{ isset(auth()->user()->email) ? auth()->user()->email : '' }}"  type="email" name="email" id="w3lSender" placeholder="{{ __('main_page.a39') }}*" class="contact-input" required=""  maxlength="50">

                    <input  value="{{ isset(auth()->user()->phone) ? auth()->user()->phone : '' }}" type="text" name="phone" id="w3lSubect" placeholder="{{ __('main_page.a40') }}*" class="contact-input" required=""  maxlength="35">
                    <input  value="{{ isset(auth()->user()->age) ? auth()->user()->age : '' }}" type="text" name="age" id="w3lSubect" placeholder="{{ __('main_page.a42') }}*" class="contact-input" required=""  maxlength="35">
                    <input  value="{{ isset(auth()->user()->special) ? auth()->user()->special : '' }}" type="text" name="special" id="w3lSubect" placeholder="{{ __('main_page.a43') }}*" class="contact-input" required="" maxlength="35">
                    <input  value="{{ isset(auth()->user()->email) ? auth()->user()->talent : '' }}" type="text" name="talent" id="w3lSubect" placeholder="{{ __('main_page.a44') }}*" class="contact-input"  maxlength="35">
                    <input type="password"  id="password"  name="password" id="w3lSubect" placeholder="{{ __('main_page.a156') }}*" class="contact-input" required="" minlength="4">
                    <input type="password"  id="confirm_password"  name="password_confirmation" id="w3lSubect" placeholder="{{ __('main_page.a157') }}*" class="contact-input" required="" minlength="4">
                    <br><span id='message'></span><br>

                 <div   @if (isset(auth()->user()->id))
                     style="display:none"
                        @endif
                    >

                    <select  name="gender" id=""  class="custom-select my-1 mr-sm-2 fo " style="width: 125px ;    background: var(--bg-grey);
                    " {{ isset(auth()->user()->id) ? '' : 'required' }}  value="{{ isset(auth()->user()->gender) ? auth()->user()->gender : '' }}" >
                        <option value="">-{{ __('main_page.a41') }}-</option>
                        <option value="ذكر">{{ __('main_page.a131') }}</option>
                        <option value="أنثى">{{ __('main_page.a132') }}</option>
                    </select>
                </div>


                </div>

                <button class="btn btn-style mt-sm-3" style="float: left" disabled id="btn">
                    {{isset(auth()->user()->id)? __('main_page.a161') : __('main_page.a133') }}</button>
            </form>
        </div>
    </div>
</div>
<!-- فورم التعبئة -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $('#password, #confirm_password').on('keyup', function () {
        if ($('#password').val() == $('#confirm_password').val()) {
          $('#message').html('Matching').css('color', 'green');
          $("#btn").prop('disabled', false);

        } else
          $('#message').html('Not Matching').css('color', 'red');
      });
</script>




@endsection
