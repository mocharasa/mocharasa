@extends('admin.layout.app')
@section('title', 'Tambah Kategori')
@section('content')
    <!-- Breadcrumb -->
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="#">Data</a></li>
            <li class="breadcrumb-item"><a href="{{route('category.index')}}">Kategori</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Kategori</li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <!-- Container -->
    <div class="container-fluid px-xxl-65 px-xl-20">
      <div class="">
        @if(count($errors)>0)
          @foreach($errors->all() as $error)
            {{ $error }}
          @endforeach
        @endif
      </div>
      <div class="row">
        <div class="col-xl-12">
                                  <section class="hk-sec-wrapper">
                                      <h5 class="hk-sec-title">Tambah Kategori</h5>
                                      <div class="row">
                                          <div class="col-sm">
                                              <form method="post" action="{{route('category.store')}}" class="needs-validation" novalidate>
                                                @csrf
                                                  <div class="form-row my-10">
                                                      <div class="col-md-12 mb-10">
                                                          <label for="validationCustom01">Nama Kategori</label>
                                                          <input type="text" class="form-control" name="name" id="validationCustom01" placeholder="" required>
                                                          <div class="invalid-feedback">Silahkan isi data dengan benar</div>
                                                      </div>
                                                  </div>
                                                  <button class="btn btn-primary" type="submit">Tambah</button>
                                              </form>
                                          </div>
                                      </div>
                                  </section>
        </div>
      </div>
    </div>
    <!-- /Container -->
@endsection
