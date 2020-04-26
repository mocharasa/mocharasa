@extends('public.layout.app')
@section('title') {{$post->judul}} @endsection
@section('breadcrumb')
<!-- ======= Hero Section ======= -->
<div id="content-desktop">
  <section id="hero-blog">
    <div class="hero-container" data-aos="fade-up">
      <div class="container-fluid">
  		<div class="row bg-dark">
  			<div class="col-md-8 col-sm-6 py-0 my-0">
  				<div class="item-home">
  					<img src="{{ asset($post->gambar) }}" class="img-fluid float-right">
  				</div>
  			</div>
  			<div class="col-md-4 col-sm-6 py-0 my-0 align-self-end">
  				<div class="float-left">
  					<h4><a href="#" style="text-decoration:none;color:white">{{$post->judul}}</a></h4>
  						<script type="text/javascript"
  							src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e574b73280b5fb9"></script>
  						<div class="addthis_inline_share_toolbox_tbr4 py-3"></div>
  				</div>
  			</div>
  		</div>
  	</div>
    </div>
  </section>
</div>
<section class="container pb-3 mb-3 bg-dark" id="content-mobile">
    <div class="row">
        <div class="col-md-4 col-sm-12">
			<hr style="display: block; height: 1px; border: 0; border-top: 1px solid #fff; margin: 1em 0; padding: 0;">
			<h4><a href="#" style="text-decoration:none;color:white">{{$post->judul}}</a></h4>
			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e574b73280b5fb9"></script>
			<div class="addthis_inline_share_toolbox_tbr4 py-3"></div>
		</div>
		<div class="col-md-8 col-sm-12" >
            <img src="{{ asset($post->gambar) }}" class="img-fluid">
        </div>
    </div>
</section>
<!-- End Hero -->
@endsection
@section('content')
    <!-- Page Content -->
    <div class="container">

      <div class="row">
      <!-- Blog Entries Column -->
      <div class="col-md-8 my-3">
    		<div class="d-flex justify-content-between">
          <kbd>
    				<i class="fa fa-calendar">&nbsp;{{\Carbon\Carbon::parse($post->created_at)->translatedFormat('l, d F Y')}}</i>&nbsp;&nbsp;<i class="fa fa-eye">&nbsp;10</i>
    			</kbd>
          <kbd><i class="fa fa-user">&nbsp;{{$post->users->name}}</i></kbd>
        </div>
    		<hr>
    		<div class="mb-2 pb-2">
          <!-- Blog Post -->
          {!! $post->content !!}
        </div>
        <hr>
        <i class="fa fa-tags">Tags :</i>
        @foreach($post->tags as $tag)
          <span class="badge badge-primary">{{$tag->name}}</span>
        @endforeach
        <hr>
        
  		</div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Categories Widget -->
          <div class="card my-3">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Simba</a>
                    </li>
                    <li>
                      <a href="#">Nyati</a>
                    </li>
                    <li>
                      <a href="#">Faru</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Kiboko</a>
                    </li>
                    <li>
                      <a href="#">Fisi</a>
                    </li>
                    <li>
                      <a href="#">Pundamlia</a>
                    </li>
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
