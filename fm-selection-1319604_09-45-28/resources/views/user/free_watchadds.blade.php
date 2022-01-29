@extends('user.layout')
@section('content')

<!-- call to action begin -->
<div class="cta">
   <div class="container" style="margin-top: 30px;">
       <div class="cta-bg">
           <div class="row justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-center">
               <div class="col-xl-7 col-lg-7 col-md-12 col-sm-10 d-xl-flex d-lg-flex d-block align-items-center">
                   <div class="cta-text">
                       <h2>We're Always Thinking Something Different</h2>
                       <p>“Money is always eager and ready to work for anyone who is ready to employ it.” </p>
                       <p class="marked">“It's nice to have a lot of money, but you know, you don't want to keep it around forever. I prefer buying things.”</p>
                      {{-- <form action="/new-add-free" method="POST">
                        @csrf
                          <input name="name" hidden value="{{{Auth::guard('web')->user()->fname}}}"/>
                          <button type="submit" class="btn-hyipox-medium cta-btn">Start Watching Adds</button>
                      </form> --}}
                      <a type="submit" href="/start-watchadds-free" class="btn-hyipox-medium cta-btn">Start Watching Free Adds</a>
                   </div>
               </div>
               <div class="col-xl-4 col-lg-4 d-xl-flex d-lg-flex justify-content-end d-block align-items-center">
                   <div class="part-video">
                       <img src="assets/img/video.jpg" alt="">
                </div>
               </div>
           </div>
       </div>
   </div>
</div>

<div class="cta">
    <div class="container" style="margin-top: 50px;">
        <div class="cta-bg">
            <div class="row justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-center">
                <div class="col-xl-4 col-lg-4 d-xl-flex d-lg-flex justify-content-end d-block align-items-center">
                    <div class="part-video">
                        <img src="assets/img/video.jpg" alt="">
                      </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-10 d-xl-flex d-lg-flex d-block align-items-center">
                    <div class="cta-text">
                        <h2>We're Always Thinking Something Different</h2>
                        <p>“Money is always eager and ready to work for anyone who is ready to employ it.” </p>
                        <p class="marked">“It's nice to have a lot of money, but you know, you don't want to keep it around forever. I prefer buying things.”</p>

                       <a type="submit" href="/start-watchadds" class="btn-hyipox-medium cta-btn">Start Watching Paid Adds</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
 </div>
<!-- call to action end -->




@endsection
