@extends('admin.layout.app')
@section('title', 'Edit User')
@section('content')
    <!-- Breadcrumb -->
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="#">Data</a></li>
            <li class="breadcrumb-item"><a href="{{route('user.index')}}">Users</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit User</li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <!-- Container -->
    <div class="container-fluid px-xxl-65 px-xl-20">

      <div class="row">
        <div class="col-xl-12">
                                  <section class="hk-sec-wrapper">
                                      <h5 class="hk-sec-title">Edit User</h5>
                                      <div class="row">
                                          <div class="col-sm">
                                              <form method="POST" action="{{ route('user.update', $user->id) }}" class="needs-validation" novalidate>
                                                @csrf
                                                @method('patch')
                                                  <div class="form-row my-10">
                                                      <div class="col-md-12 mb-10">
                                                          <label for="validationCustom01">Nama</label>
                                                          <input type="text" class="form-control" name="name" id="validationCustom01" value="{{$user->name}}" required>
                                                          <div class="invalid-feedback">Silahkan isi data dengan benar</div>
                                                      </div>
													  <div class="col-md-12 mb-10">
                                                          <label for="validationCustom02">Email</label>
                                                          <input type="email" class="form-control" name="email" id="validationCustom02" value="{{$user->email}}" readonly>
                                                          <div class="invalid-feedback">Silahkan isi data dengan benar</div>
                                                      </div>
													  <div class="col-md-12 mb-10">
                                                          <label for="validationCustom03">Password</label>
                                                          <input type="password" class="form-control" name="password" id="validationCustom03" placeholder="enter new password">                                                          
                                                      </div>
													  <div class="col-md-12 mb-10">
                                                          <label for="validationCustom04">Level (Tipe User)</label>
                                                          <select class="form-control select2" name="level" id="validationCustom04" required>                                                                                                                      
                                                              <option value="1" holder
															  @if($user->level == 1)
																  selected
															  @endif
															  >Administrator</option>                                                            
															  <option value="0" holder
															  @if($user->level == 0)
																  selected
															  @endif
															  >Penulis</option>
                                                          </select>
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
