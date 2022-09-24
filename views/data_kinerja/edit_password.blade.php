@extends('layout.main')

@section('judul')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-0">
        <div class="col-sm-12">
          <h1 class="font-weight-bold">Ubah Password</h1>
          <span>Amankan akun Anda dengan kombinasi password yang baik</span>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  
  <!-- ISI CONTENT -->
  <div class="container-fluid">
    <div class="col-sm-12">
  <div class="card" style="width: 25rem;">
      <div class="card-header">
          <form action="/update/password/pegawai/{{ $user->id }}" method="POST">
            @csrf
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @elseif (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
              <div class="form-group">
                  <div class="col-lg-15">
                      <label for="password">Password Lama</label>
                      <input type="password" name="password_lama" id="password" class="form-control
                      @error('email')
                      is-invalid
                      @enderror
                      " placeholder="Masukan Password Lama">
                      @error('password')
                          <div class='invalid-feedback'>
                              {{ $message }}
                          </div>
                      @enderror
                  </div>
                  </div>
              <div class="form-group">
                  <div class="col-lg-15">
                      <label for="exampleFormControlInput1">Password Baru</label>
                      <input type="password" class="form-control" name="password_baru" id="password_baru" placeholder="Masukan Password baru ..">
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-lg-15">
                      <label for="exampleFormControlInput1">Konfirmasi Password</label>
                      <input type="password" class="form-control" name="password_konfirmasi" id="password_konfirmasi" placeholder="Ulangi Password baru ..">
                  </div><br>
                  <button type="submit" class="btn btn-primary">Perbarui</button>
                  <button type="cancel" class="btn btn-warning">Batal</button>
                  {{-- <a href="{{url('pengaturan-pegawai')}}" class="btn btn-warning">Batal</a> --}}
              </div>
          </form>
      </div>
  </div>
  </div>
  </div>
  
  @endsection
  
