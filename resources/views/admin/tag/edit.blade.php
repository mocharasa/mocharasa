@extends('admin.layout.app')
@section('title', 'Edit Tag')
@section('content')
    <!-- Breadcrumb -->
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="#">Data</a></li>
            <li class="breadcrumb-item"><a href="{{route('tag.index')}}">Tag</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Tag</li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <!-- Container -->
    <div class="container-fluid px-xxl-65 px-xl-20">

      <div class="row">
        <div class="col-xl-12">
                                  <section class="hk-sec-wrapper">
                                      <h5 class="hk-sec-title">Edit Tag</h5>
                                      <div class="row">
                                          <div class="col-sm">
                                              <form method="POST" action="{{ route('tag.update', $tags->id) }}" class="needs-validation" novalidate>
                                                @csrf
                                                @method('patch')
                                                  <div class="form-row my-10">
                                                      <div class="col-md-12 mb-10">
                                                          <label for="validationCustom01">Nama Tag</label>
                                                          <input type="text" class="form-control" name="name" id="validationCustom01" value="{{$tags->name}}" required>
                                                          <div class="invalid-feedback">Silahkan isi data dengan benar</div>
                                                      </div>
                                                  </div>
                                                  <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Simpan</button>
                                              </form>
                                          </div>
                                      </div>
                                  </section>
        </div>
      </div>
    </div>
    <!-- /Container -->
@endsection
