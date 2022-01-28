@extends('user.layout')
@section('content')


<!-- call to action begin -->
<div class="cta">
   <div class="container">
       <div class="cta-bg">
           <div class="row justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-center">

               <div class="col-lg-12 mb-4">
                <!-- Project Card Example -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3 text-center">
                    <h2 class="m-0 font-weight-bold text-primary">Watch Daily Ads</h2>
                  </div>
                  <div class="card-body">
                                                             <div id="how-to" class="card-body text-primary">
                                 <h6 class="text-center m-0 font-weight-bold text-danger">
                                     How to Watch Ad?
                                 </h6>
                                 <p class="text-left">
                                     <ol>
                                         <li>Click Show Ad Button Below</li>
                                         <li>Watch Ad</li>
                                         <li>Wait for desired time to open submit button</li>
                                         <li>Click on Submit</li>
                                     </ol>
                                 </p>
                             </div>
                             <div class="text-center">
                             <button id="watch" onClick="showAd();" ; class="btn btn-success m-4">Next Ad</button><br/>
                                 <div id="counter">
                                 </div>
                                 <script>function showAd(){document.getElementById("link").style.display="block";document.getElementById("how-to").style.display="none";document.getElementById("watch").style.display="none";var timeLeft=2;var elem=document.getElementById('counter');var timerId=setInterval(countdown,1000);function countdown(){if(timeLeft==0){clearTimeout(timerId);document.getElementById("submit").style.visibility="visible";document.getElementById("counter").style.display="none";}else{elem.innerHTML=timeLeft+' seconds remaining';timeLeft--;}}}</script>
                                                                                     <form action="/withdraw-adds/{{Auth::guard('web')->user()->email}}" method="post">
                                                                                        @csrf
                                             <button style="visibility:hidden;" id="submit" name="watched-silver" type="submit" class="btn btn-success m-4">Submit</button><br/>
                                         </form>

                                         <iframe id="link" style="display:none;" width="560" height="315" src="https://www.youtube.com/embed/fxA1MEnpZFE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;  encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                              </div>
                  </div>
                </div>
              </div>
          </div>
           </div>
       </div>
   </div>
<!-- call to action end -->




@endsection

