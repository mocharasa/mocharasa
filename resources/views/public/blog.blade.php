@extends('public.layout.app')
@section('title','Blog terbaru')
@section('breadcrumb')
  <!-- ======= Breadcrumb ======= -->
   <section id="cta" class="cta">
     <div class="container" data-aos="zoom-in">
       <div class="text-center">
         <div class="container-fluid">
           <div class="row">
             <div class="col align-self-end">

               <ul class="breadcrumb">
                 <li class="breadcrumb-item"><a href="#">Years</a></li>
                 <li class="breadcrumb-item"><a href="#">2017</a></li>
                 <li class="breadcrumb-item"><a href="#">Seasons</a></li>
                 <li class="active breadcrumb-item">Fall</li>
               </ul>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
 <!-- End Breadcrumb -->
@endsection
@section('content')
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8 my-3">
          <!-- Blog Post -->
          @foreach($post as $row=>$hasil)
          <div class="card mb-4">
      			<div class="card-badge">{{ $hasil->category['name'] }}</div>
            <a href="{{route('public.viewblog', $hasil->slug)}}">
              <img class="card-img-top" src="{{ asset($hasil->gambar) }}" alt="{{ $hasil->judul }}">
            </a>
      			<div class="ribbon-wrapper">
                <div class="ribbon red"><strong><i class="fa fa-star"></i></strong></div>
            </div>
            <div class="card-body">
              <a href="{{route('public.viewblog', $hasil->slug)}}"><h2 class="card-title">{{ $hasil->judul }}</h2></a>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
              <a href="{{route('public.viewblog', $hasil->slug)}}" class="btn btn-success">Read More →</a>
            </div>
            <div class="card-footer text-white small bg-secondary">
              <div class="d-flex justify-content-between">
                <div><i class="fa fa-clock-o">&nbsp;{{ $hasil->created_at->diffForHumans() }}</i>&nbsp;&nbsp;<i class="fa fa-eye">&nbsp;10</i></div>
                <div><i class="fa fa-user">&nbsp;{{ $hasil->users->name }}</i></div>
              </div>
            </div>
          </div>
          @endforeach
          <!-- Pagination -->
          {{ $post->links() }}
          <br>
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Categories Widget -->
          <div class="card my-3" style="border-radius:0;">
            <h5 class="card-header bg-lightseagreen text-white" style="border-radius:0;">Kategori</h5>
            <div class="card-body my-0 mx-0">

                  <ul class="list-group my-0 mx-0">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Cras justo odio
                      <span class="badge badge-primary badge-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Dapibus ac facilisis in
                      <span class="badge badge-primary badge-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Morbi leo risus
                      <span class="badge badge-primary badge-pill">1</span>
                    </li>
                  </ul>

            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">maelezo</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div>
		  <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">banner</h5>
            <div class="card-body">
              <img class="card-img-top" src="https://2.bp.blogspot.com/-vvG5hMTFOro/W6RaoxdAikI/AAAAAAAAK1k/jezYdP7fvfYvt15Jv8a0agrGQE2lMU8YgCKgBGAs/s1600/MASAI-2.jpg" alt="Card image cap">
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

@endsection
