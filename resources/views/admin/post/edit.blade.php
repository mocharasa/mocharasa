@extends('admin.layout.app')
@section('title', 'Edit Postingan')
@section('content')
    <!-- Breadcrumb -->
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="#">Data</a></li>
            <li class="breadcrumb-item"><a href="{{route('post.index')}}">Post</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Post</li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <!-- Container -->
    <div class="container-fluid px-xxl-65 px-xl-20">

      <div class="row">
        <div class="col-xl-12">
                                  <section class="hk-sec-wrapper">
                                      <h5 class="hk-sec-title">Tambah Data</h5>
                                      <div class="row">
                                          <div class="col-sm">
                                              <form method="post" action="{{route('post.update',$post->id)}}" class="needs-validation" enctype="multipart/form-data" novalidate>
                                                @csrf
                                                @method('PUT')
                                                  <div class="form-row my-10">
                                                      <div class="col-md-12 mb-10">
                                                          <label for="validationCustom01">Judul</label>
                                                          <input type="text" class="form-control" name="judul" id="validationCustom01" value="{{ $post->judul }}" required>
                                                          <div class="invalid-feedback">Silahkan isi data dengan benar</div>
                                                      </div>
                                                      <div class="col-md-12 mb-10">
                                                          <label for="validationCustom02">Kategori</label>
                                                          <select class="form-control select2" name="id_category" id="validationCustom02" required>
                                                            @foreach ($category as $c)
                                                              <option value="{{$c->id}}"
                                                                  @if($c->id == $post->id_category)
                                                                    selected
                                                                  @endif
                                                              >{{$c->name}}</option>
                                                            @endforeach
                                                          </select>
                                                          <div class="invalid-feedback">Silahkan isi data dengan benar</div>
                                                      </div>
                                                      <div class="col-md-12 mb-10">
                                                          <label for="validationCustom05">Tag</label>
                                                          <select class="select2 select2-multiple" multiple="" data-placeholder="Pilih Tag" name="tags[]" id="validationCustom05" required>
                                                            @foreach($tags as $tag)
                                                              <option value="{{$tag->id}}"
                                                                @foreach($post->tags as $key)
                                                                  @if($tag->id == $key->id)
                                                                    selected
                                                                  @endif
                                                                @endforeach
                                                                >{{$tag->name}}</option>
                                                            @endforeach
                                                          </select>
                                                          <div class="invalid-feedback">Silahkan isi data dengan benar</div>
                                                      </div>
                                                      <div class="col-md-12 mb-10">
                                                          <label for="validationCustom03">Gambar</label>
                                                          <div class="form-group">
                                                              <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                                  <div class="form-control text-truncate" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                                                  <span class="input-group-append">
                  														                    <span class=" btn btn-primary btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span>
                                                                  <input type="file" name="gambar" id="validationCustom03">
                                                                  </span>
                                                                  <a href="#" class="btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                                  </span>
                                                              </div>
                                                          </div>
                                                      </div>
													  <div class="col-md-12 mb-10">
                                                          <label for="validationCustom06">Status</label>
                                                          <select class="form-control select2" name="status" id="validationCustom06" required>                                                            
                                                              <option value="publish">Publish</option>                                                            
															  <option value="draft">Draft</option>
                                                          </select>
                                                          <div class="invalid-feedback">Silahkan isi data dengan benar</div>
                                                      </div>
                                                      <div class="col-md-12 mb-10">
                                                          <label for="validationCustom04">Konten</label>
                                                          <div class="tinymce-wrap">
                                                            <textarea class="tinymce" name="content" id="validationCustom04" required>{{ $post->content }}</textarea>
                                                          </div>
                                                          <div class="invalid-feedback">Silahkan isi data dengan benar</div>
                                                      </div>
                                                  </div>
                                                  <button class="btn btn-primary" type="submit">Simpan</button>
                                              </form>
                                          </div>
                                      </div>
                                  </section>
        </div>
      </div>
    </div>
    <!-- /Container -->
@endsection
