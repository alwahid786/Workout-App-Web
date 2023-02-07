<style>
  @media screen and (min-width:992px) {
    .nav-list .nav-item .nav-link {
      border-bottom: 2px solid transparent;
    }

    .nav-list .nav-item .nav-link:hover {
      border-bottom: 2px solid #E37048;
      color: #E37048;
    }

    .nav-list .nav-item.active {
      border-bottom: 2px solid #E37048;

    }



    .nav-list .nav-item .login-link:hover {
      border-bottom: 2px solid transparent;
      color: white;
    }

    .nav-list .nav-item .trainer-link:hover {
      border-bottom: 2px solid #E37048;
    }
  }
</style>
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid px-sm-5" data-aos="fade-right">
    <a class="navbar-brand web-logo" href="#"> <img src="{{asset('public/assets/images/logo.svg')}}" alt="image"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-btn"><i class="fa fa-bars" aria-hidden="true"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto nav-list ">
        <li class="nav-item mr-lg-4">
          <a class="nav-link px-2 trainer-link" href="#"> <span>BEC</span>OME A TRAINER</a>
        </li>
        <li class="nav-item mr-lg-4 ">
          <a class="nav-link px-2" href="{{url('/about')}}">ABOUT US</a>
        </li>
        <li class="nav-item mr-lg-4 ">
          <a class="nav-link px-2" href="{{url('/faq')}}">FAQ's</a>
        </li>
        <li class="nav-item nav-item-block">
          <a class="nav-link login-link px-2  px-lg-4 text-center modal-view" href="javascript:void(0)" data-toggle="modal" data-target="#loginModal">Login</a>
        </li>
      </ul>
    </div>
  </div>

</nav>