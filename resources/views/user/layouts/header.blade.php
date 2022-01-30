
<style>
    .fixed
    {
        position: fixed;
    width: 100%;
    z-index: 5;
    background: linear-gradient(
-19deg, #4776e6 10%, #8e54e9);
    top: 0;
    left: 0;
    border-bottom-color: transparent;
    box-shadow: 0 0 20px 2px rgb(0 0 0 / 40%);
    }
.homee
{
    margin-left: 750px !important;
}
.okayy
{
    margin-left:800px;
}
.unique
{
    color: white;
    margin-left: 130px;
}
.coll{
    color: white !important;
}
@media screen and (min-width: 1980px) and (max-width: 2560px)
{
    .okayy{
        margin-left: 1000px !important;
    }

}
@media screen and (min-width: 1441px) and (max-width: 1980px)
{
    .okayy{
        margin-left: 360px !important;
    }
}
@media screen and (min-width: 1025px) and (max-width: 1440px)
{
    .okayy{
        margin-left: 50px !important;
    }

}
@media screen and (min-width: 992px) and (max-width: 1024px)
{
    .okayy{
        margin-left: 100px !important;
    }

}
@media screen and (min-width: 768px) and (max-width: 991px)
{
    .okayy{
        margin-left: 0% !important;
    }

}
@media screen and (min-width: 480px) and (max-width: 767px)
{
    .okayy{
        margin-left: 0% !important;
    }

}
@media screen and (min-width: 320px) and (max-width: 479px)
{
    .okayy{
        margin-left: 0% !important;
    }
    .unique
    {
        margin-left: 0% !important;
    }
}
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed">
    <a href="/">
        <h2 class="unique">Unique Earning</h2>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <div class="okayy">
        <ul class="navbar-nav">

            <li class="nav-item active">
                <a class="nav-link coll" href="/">Home <span class="sr-only">(current)</span></a>
              </li>

            <li class="nav-item active">
              <a class="nav-link coll" href="/make-deposit">Make Deposit <span class="sr-only">(current)</span></a>
            </li>

                @if(Auth::guard('web')->check() === true)
                @if(Auth::guard('web')->user()->statuss == '1')

                  <li class="nav-item active">
                    <a class="nav-link coll" href="/user-dashboard">Dashboard<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link coll " href="/watchadds">Watch Adds <span class="sr-only">(current)</span></a>
                  </li>
                  <li>
                    <a class="nav-link coll" href="/withdraw/{{Auth::guard('web')->user()->email}}">Withdraw Payment</a>
                  </li>
                  <li>
                    <a class="nav-link coll" href="/withdraw-history">Withdraw History</a>
                  </li>

                  @endif
                <li class="nav-item active">
                    <a class="nav-link coll " href=""> {{{ Auth::guard('web')->user()->fname ?? ''}}} {{{ Auth::guard('web')->user()->lname ?? ''}}} <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item dropdown active">
                    <a class="nav-link coll dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        @if(Auth::guard('web')->user()->url)
                        <img src="{{asset('images/' .Auth::guard('web')->user()->url)}}" width="30" height="30" class="rounded-circle" />
                        @else
                        <img src="{{asset('zrs.png')}}" width="30" height="30" class="rounded-circle" />
                        @endif
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="/user-profile">Edit Profile</a>
                      <a class="dropdown-item" href="/user-investment">Investment History</a>
                      @if(Auth::guard('web')->user()->statuss == '1')

                      @endif
                      <a class="dropdown-item" href="/user-password">Change Password</a>
                      <a class="dropdown-item" href="{{url('/logout-user')}}">Logout</a>
                    </div>
                  </li>
                @else
                <li class="nav-item active">
                  <a class="nav-link coll " href="/about-us">About Us <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link coll " href="/contact-us">Contact Us <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link coll " href="{{ route('login') }}">Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link coll " href="/register">Register <span class="sr-only">(current)</span></a>
                </li>
                @endif
      </ul>
    </div>
    </div>
  </nav>
