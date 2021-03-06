@extends('admin.layout.app')
@section('title') Trash Post @endsection
@section('content')
    <!-- Breadcrumb -->
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="#">Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Trash Post</li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <!-- Container -->
    <div class="container-fluid px-xxl-65 px-xl-20">      
      <div class="row">
        <div class="col-xl-12">
                              <section class="hk-sec-wrapper">
                                  <h5 class="hk-sec-title">Data Post</h5>
                                  <div class="row">
                                      <div class="col-sm">
                                          <div class="table-wrap">
                                              <table class="table tablesaw table-bordered table-hover  mb-0" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>
                                                  <thead>
                                                      <tr>
                                                          <th scope="col" data-tablesaw-sortable-col><h6 class="text-center">No</h6></th>
                                                          <th scope="col" data-tablesaw-sortable-col><h6 class="text-center">Judul</h6></th>
                                                          <th scope="col" data-tablesaw-sortable-col><h6 class="text-center">Kategori</h6></th>
                                                          <th scope="col" data-tablesaw-sortable-col><h6 class="text-center">Tags</h6></th>
                                                          <th scope="col" data-tablesaw-sortable-col><h6 class="text-center"></h6></th>
                                                          <th scope="col" data-tablesaw-sortable-col></th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                    @foreach ($post as $row=>$hasil)
                                                      <tr>
                                                          <td><center>{{ $row + $post->firstitem() }}</center></td>
                                                          <td><a href="javascript:void(0)">{{ $hasil->judul }}</a></td>
                                                          <td><a href="javascript:void(0)">{{ $hasil->category['name'] }}</a></td>
                                                          <td><a href="javascript:void(0)">@foreach($hasil->tags as $tag) <ul><li>{{$tag->name}}</li></ul> @endforeach</a></td>
                                                          <td><center><img src="{{ asset($hasil->gambar) }}" class="img-fluid" style="height:80px;width:120px"></center></td>
                                                          <td class="text-center py-0 my-0">
                                                            <a href="{{route('post.restore', $hasil->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-undo"></i></a>
                                                            <a href="#" data-toggle="modal" data-target="#hapus{{$hasil->id}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                          </td>
                                                      </tr>
                                                      <!-- Modal -->
                                                      <div class="modal fade" id="hapus{{$hasil->id}}" tabindex="-1" role="dialog" aria-labelledby="hapusLabel" aria-hidden="true">
                                                          <div class="modal-dialog" role="document">
                                                              <div class="modal-content">
                                                                  <div class="modal-header">
                                                                      <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                          <span aria-hidden="true">&times;</span>
                                                                      </button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                      <p>Apakah anda yakin akan menghapus data ini ?</p>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                    <form action="{{route('post.kill', $hasil->id)}}">
                                                                      @csrf
                                                                      @method('delete')
                                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                                                      <button type="submit" class="btn btn-primary">Ya</button>
                                                                    </form>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                    @endforeach
                                                  </tbody>
                                              </table>
                                              <div class="my-1 py-1 float-right">{{ $post->links() }}</div>
                                          </div>
                                      </div>
                                  </div>
                              </section>
        </div>
      </div>
    </div>
    <!-- /Container -->

@endsection
