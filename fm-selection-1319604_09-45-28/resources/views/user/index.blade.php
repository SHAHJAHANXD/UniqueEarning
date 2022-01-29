 @extends('user.layout')
 @section('content')
     <!-- banner begin -->
     <div class="banner">
         <div class="container">
             <div
                 class="row justify-content-xl-between justify-content-lg-between justify-content-md-center justify-content-sm-center">
                 <div
                     class="col-xl-7 col-lg-7 col-sm-10 col-md-9 d-xl-flex d-lg-flex d-block align-items-center d-banner-tamim">
                     <div class="banner-content">
                         <h4>Want to Invest Money?</h4>
                         <h1>Grow your money with safety invest in Unique Earning</h1>
                         <p>We Already Completed Our 50+ Years in Online Investment Business<br /> With Trust and Excellent
                             Reputation.</p>
                     </div>
                     <div style="margin-top: 110px">
                         <div class="banner-statics">
                             <div class="single-statics">
                                 <div class="part-icon">
                                     <img src="assets/img/svg/start.svg" alt="">
                                 </div>
                                 <div class="part-text">
                                     <span class="text">Starting Date</span>
                                     <span class="number">November 15, 2021</span>
                                 </div>
                             </div>
                             <div class="single-statics">
                                 <div class="part-icon">
                                     <img src="assets/img/svg/user.svg" alt="">
                                 </div>
                                 <div class="part-text">
                                     <span class="text">Active Users</span>
                                     <span class="number"># {{ $user }}</span>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- banner end -->
     <!-- about begin -->
     <div class="about">
         <div class="container">
             <div class="how-to-works">
                 <div class="row justify-content-center justify-content-sm-center justify-content-md-start">
                     <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                         <div class="single-system">
                             <div class="part-icon">
                                 <img src="assets/img/svg/add-user.svg" alt="">
                             </div>
                             <div class="part-text">
                                 <h4 class="title">Register Account</h4>
                                 <p>Register for an account. It's totally easy and free</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                         <div class="single-system">
                             <div class="part-icon">
                                 <img src="assets/img/svg/coin.svg" alt="">
                             </div>
                             <div class="part-text">
                                 <h4 class="title">Invest Money</h4>
                                 <p>Choose your investment plan and make first deposit</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-4 col-lg-4 col-sm-10 col-md-6">
                         <div class="single-system">
                             <div class="part-icon">
                                 <img src="assets/img/svg/money-bag.svg" alt="">
                             </div>
                             <div class="part-text">
                                 <h4 class="title">Get Withdraw</h4>
                                 <p>Request for the withdrawal and receive a payment</p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- about end -->
     <!-- prcing plan begin -->
     <!-- call to action begin -->
     <div class="cta">
         <div class="container">
             <div class="cta-bg">
                 <div
                     class="row justify-content-xl-between justify-content-lg-between justify-content-md-between justify-content-sm-center">
                     <div class="col-xl-7 col-lg-7 col-md-12 col-sm-10 d-xl-flex d-lg-flex d-block align-items-center">
                         <div class="cta-text">
                             <h2>We're Always Thinking Something Different</h2>
                             <p>“Money is always eager and ready to work for anyone who is ready to employ it.” </p>
                             <p class="marked">“It's nice to have a lot of money, but you know, you don't want to
                                 keep it around forever. I prefer buying things.”</p>
                             <a href="/make-deposit" class="btn-hyipox-medium cta-btn">Start Investing</a>
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
     <!-- call to action end -->
     <!-- choosing reson begin -->
     <div class="choosing-reason">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-xl-8 col-lg-8">
                     <div class="section-title">
                         <span class="sub-title">
                             You couldn't think
                         </span>
                         <h2>
                             why Unique Earning is<span class="special"> the best</span>
                         </h2>
                     </div>
                 </div>
             </div>
             <div class="row justify-content-center">
                 <div class="col-xl-4 col-lg-5 col-sm-10 col-md-12">
                     <div class="part-left">
                         <div class="row">
                             <div class="col-xl-12 col-lg-12 col-md-4">
                                 <div class="single-reason">
                                     <div class="icon-box">
                                         <div class="part-icon">
                                             <img src="assets/img/svg/withdraw.svg" alt="">
                                         </div>
                                     </div>
                                     <div class="part-text">
                                         <h3 class="title">Get Instant Withdrawals</h3>
                                         <p>Get your payment instantly through requesting it! We don't take percentage</p>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-xl-12 col-lg-12 col-md-4">
                                 <div class="single-reason">
                                     <div class="icon-box">
                                         <div class="part-icon">
                                             <img src="assets/img/svg/referral.svg" alt="">
                                         </div>
                                     </div>
                                     <div class="part-text">
                                         <h3 class="title">Unlimited Referral Bonus</h3>
                                         <p>Promote Unique Earning and earn unlimited referral commission from each referral
                                             links</p>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-xl-12 col-lg-12 col-md-4">
                                 <div class="single-reason">
                                     <div class="icon-box">
                                         <div class="part-icon">
                                             <img src="assets/img/svg/affiliate-marketing.svg" alt="">
                                         </div>
                                     </div>
                                     <div class="part-text">
                                         <h3 class="title">Invest To Join and Earn</h3>
                                         <p>It's more easy to join with us. Invest some money and get paid by adds.</p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-4 col-lg-2 d-xl-flex d-lg-none d-block align-items-end">
                     <div class="part-img">
                         <div class="shadow-shape"></div>
                         <img src="assets/img/choosing-reason.png" alt="">
                     </div>
                 </div>
                 <div class="col-xl-4 col-lg-5 col-sm-10 col-md-12">
                     <div class="part-right">
                         <div class="row">
                             <div class="col-xl-12 col-lg-12 col-md-4">
                                 <div class="single-reason">
                                     <div class="icon-box">
                                         <div class="part-icon">
                                             <img src="assets/img/svg/bird.svg" alt="">
                                         </div>
                                     </div>
                                     <div class="part-text">
                                         <h3 class="title"> Ecosystem</h3>
                                         <p>Get mining with a big profit, and Miner is calculated with the ecosystem.</p>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-xl-12 col-lg-12 col-md-4">
                                 <div class="single-reason">
                                     <div class="icon-box">
                                         <div class="part-icon">
                                             <img src="assets/img/svg/shield.svg" alt="">
                                         </div>
                                     </div>
                                     <div class="part-text">
                                         <h3 class="title">SSL Security</h3>
                                         <p>Our system is secured and protected using DDos protection and SSL. </p>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-xl-12 col-lg-12 col-md-4">
                                 <div class="single-reason">
                                     <div class="icon-box">
                                         <div class="part-icon">
                                             <img src="assets/img/svg/customer-service.svg" alt="">
                                         </div>
                                     </div>
                                     <div class="part-text">
                                         <h3 class="title">24/7 Friendly Support</h3>
                                         <p>We provide 24/7 friendly support in Unique Earning. We're always responsible to
                                             take care</p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- choosing reson end -->
     <!-- footer begin -->
     <div class="footer">
         <div class="footer-top">
             <div class="container">
                 <div class="row">

                     <div class="col-lg-12 col-md-12 col-sm-10">
                         <div class="addressing" style="    color: white;">
                             <div class="row">
                                 <div class="col-lg-4 col-md-4 col-sm-6">
                                     <div class="single-address">
                                         <h4>EasyPaisa Phone Number</h4>
                                         <span>Account Holder Name</span>
                                         <p>--> Abdul Majid</p>
                                         <p><i class="fa fa-phone"></i> - +923188108337</p>
                                     </div>
                                 </div>
                                 <div class="col-lg-4 col-md-4 col-sm-6">
                                     <div class="single-address">
                                         <h4>EasyPaisa Phone Number</h4>
                                         <span>Account Holder Name</span>
                                         <p>--> Qamar Zaman</p>
                                         <p><i class="fa fa-phone"></i> - +923415772902</p>
                                     </div>
                                 </div>
                                 <div class="col-lg-4 col-md-4 col-sm-6">
                                     <div class="single-address">
                                         <h4>JazzCash Phone Number</h4>
                                         <span>Account Holder Name</span>
                                         <p>--> Rohid</p>
                                         <p><i class="fa fa-phone"></i> - +923203530173</p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- footer end -->
 @endsection
