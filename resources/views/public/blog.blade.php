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
            <img class="card-img-top" src="{{ asset($hasil->gambar) }}" alt="{{ $hasil->judul }}">
			<div class="ribbon-wrapper">
                <div class="ribbon red"><strong>Popular</strong></div>
            </div>
            <div class="card-body">
              <h2 class="card-title">{{ $hasil->judul }}</h2>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
              <a href="#" class="btn btn-success">Read More →</a>
            </div>
            <div class="card-footer text-white small bg-secondary">
              {{ $hasil->created_at }}
            </div>
          </div>
          @endforeach

          <!-- Pagination -->
          {{ $post->links() }}<br>

          <!-- Go ahead and squeeze me! -->
          <!-- <div class="wrapper">
            <ul class="pagination" role="menubar" aria-label="Pagination">
              <li><a href=""><span>First</span></a></li>
              <li><a href=""><span>Previous</span></a></li>
              <li><a href="">1</a></li>
              <li><a href="">2</a></li>
              <li><a href="">3</a></li>
              <li class="current"><a href="">4</a></li>
              <li><a href="">5</a></li>
              <li><a href="">6</a></li>
              <li><a href="">7</a></li>
              <li><a href=""><span>Next</span></a></li>
              <li><a href=""><span>Last</span></a></li>
            </ul>
          </div> -->

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
