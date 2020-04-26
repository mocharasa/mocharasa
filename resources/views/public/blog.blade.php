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
            <h4 class="card-header bg-lightseagreen text-white" style="border-radius:0;">Kategori</h4>
            <div class="card-body" style="border-radius:0;">
              <div class="row">
                <div class="col-lg-12">
                  <ul class="list-unstyled">
                    @foreach($category_data as $list)
                    <li class="my-1 border-bottom d-flex justify-content-between align-items-center">
                      <h5><a href="{{route('public.category', $list->slug)}}">{{$list->name}}</h5></a>
                      <span class="badge badge-lightseagreen badge-pill mx-2 my-2"><strong>{{$list->posts->count()}}</strong></span>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">maelezo</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

@endsection
