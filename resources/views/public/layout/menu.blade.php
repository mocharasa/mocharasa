<div id="myOverlay" class="overlay">
  <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
  <div class="overlay-content">
    <form action="{{route('public.cari')}}" method="get">
      @csrf
      <input type="text" placeholder="Search..." name="cari">
      <button type="submit" class="bg-lightseagreen text-white"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">
      <div class="logo mr-auto">
        <h1 class="text-light"><a href="{{url('/')}}"><span>mocharasa</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none shadow-sm d-lg-block">
        <ul>
          <!-- <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
          <li class="active"><a href="{{url('/')}}">Home</a></li>
          <li><a href="#team">Tentang</a></li>
		      <li><a href="#about">Profil</a></li>
          <li><a href="{{url('/blog')}}">Blog</a></li>
          <li><a href="#portfolio">Galeri</a></li>
          <li><a href="#contact">Kontak</a></li>
		      <li><a href="#" onclick="openSearch()"><i class="bx bx-search"></i> Search</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header>
  <!-- End Header -->
