@extends('include.app')

@section('main')


<div class="contact-form-sec pt-5 mt-md-5 ContactPageForm rt">
              <div class="title-heading-w3 text-center mx-auto mb-5" style="max-width:600px">
                  <h3 class="title-style"><span> <p>{{ __('main_page.ns3d')}}</p></span>              </h3>
<p>
    {{ __('main_page.fdln') }}

</p>
              </div>


              <div class="row contact-block align-items-center">
                  <div class="col-md-9 contact-right mt-md-0 mt-4 pl-lg-4 m-auto">
                      <form action="{{ route('contact_post') }}" method="post" class="signin-form">
                          @csrf
                          <div class="input-grids">

                              <input type="text" name="name" id="w3lName" placeholder="{{ __('main_page.name')}}*" class="contact-input" required="" value="{{ auth()->user()-> name ?? '' }}" }}>

                              <input type="email" name="email" id="w3lSender" placeholder="{{ __('main_page.email')}}*" class="contact-input" required="" value="{{ auth()->user()-> email ?? '' }}">

                              <input type="text" name="subject" id="w3lSubect" placeholder="{{ __('main_page.subject')}}*" class="contact-input" required="">
                          </div>
                          <div class="form-input">
                              <textarea name="message" id="w3lMessage" placeholder="{{ __('main_page.message')}}*" required=""></textarea>
                          </div>
                          <button class="btn btn-style mt-sm-3">
                            {{ __('main_page.send')}}</button>
                      </form>
                  </div>
              </div>
          </div>
<br>

    @if (session('msg'))
    <div class="alert alert-success">
        <center>
            <p>

            {{ __('main_page.tm_alaersal') }}

            </p>

        </center>
    </div>
@endif
@endsection
