<!-- Vertical Nav -->
 <nav class="hk-nav hk-nav-light">
     <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
     <div class="nicescroll-bar">
         <div class="navbar-nav-wrap">
             <ul class="navbar-nav flex-column">
                 <li class="nav-item active">
                     <a class="nav-link" href="#">
                         <i class="ion ion-md-analytics"></i>
                         <span class="nav-link-text">Dashboard</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{route('user.index')}}">
                         <i class="ion ion-md-people"></i>
                         <span class="nav-link-text">Users</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#auth_drp">
                         <i class="ion ion-md-contact"></i>
                         <span class="nav-link-text">Profil</span>
                     </a>
                     <ul id="auth_drp" class="nav flex-column collapse collapse-level-1">
                         <li class="nav-item">
                             <ul class="nav flex-column">
                               <li class="nav-item">
                                   <a class="nav-link" href="typography.html"><i class="ion ion-md-person"></i>Riwayat Diri</a>
                               </li>
                               <li class="nav-item">
                                   <a class="nav-link" href="typography.html"><i class="ion ion-md-share"></i>Sosial Media</a>
                               </li>
                               <li class="nav-item">
                                   <a class="nav-link" href="typography.html"><i class="ion ion-md-information-circle"></i>Tentang (Bio)</a>
                               </li>
                               <li class="nav-item">
                                   <a class="nav-link" href="typography.html"><i class="ion ion-md-briefcase"></i>Portofolio</a>
                               </li>
                             </ul>
                         </li>
                     </ul>
                 </li>
             </ul>
             <hr class="nav-separator">
             <div class="nav-header">
                 <span>Menu Navigasi</span>
                 <span>-</span>
             </div>
             <ul class="navbar-nav flex-column">
                 <li class="nav-item">
                     <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#content_drp">
                         <i class="ion ion-md-clipboard"></i>
                         <span class="nav-link-text">Planner</span>
                     </a>
                     <ul id="content_drp" class="nav flex-column collapse collapse-level-1">
                         <li class="nav-item">
                             <ul class="nav flex-column">
                                 <li class="nav-item">
                                     <a class="nav-link" href="typography.html"><i class="ion ion-md-list"></i>Tugas</a>
                                 </li>
                                 <li class="nav-item">

                                     <a class="nav-link" href="images.html"><i class="ion ion-md-calendar"></i>Jadwal</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" href="media-object.html"><i class="ion ion-md-book"></i>Catatan</a>
                                 </li>
                             </ul>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#utilities_drp">
                         <i class="ion ion-md-document"></i>
                         <span class="nav-link-text">Content</span>
                     </a>
                     <ul id="utilities_drp" class="nav flex-column collapse collapse-level-1">
                         <li class="nav-item">
                             <ul class="nav flex-column">
                                 <li class="nav-item">
                                     <a class="nav-link" href="{{ route('post.index') }}"><i class="ion ion-md-paper"></i>Postingan</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" href="{{ route('category.index') }}"><i class="ion ion-md-copy"></i>Kategori</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" href="{{ route('tag.index') }}"><i class="ion ion-md-pricetag"></i>Tag</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" href="{{ route('post.trash') }}"><i class="ion ion-md-trash"></i>Trash</a>
                                 </li>
                             </ul>
                         </li>
                     </ul>
                 </li>

             </ul>
             <hr class="nav-separator">
             <div class="nav-header">
                 <span>Lainnya</span>
                 <span>-</span>
             </div>
             <ul class="navbar-nav flex-column">
                 <li class="nav-item">
                     <a class="nav-link" href="documentation.html">
                         <i class="ion ion-md-settings"></i>
                         <span class="nav-link-text">Pengaturan</span>
                     </a>
                 </li>
             </ul>
         </div>
     </div>
 </nav>
 <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
 <!-- /Vertical Nav -->
