@extends('layouts.utama')

@section('judul')Register @endsection

@section('isi')
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="/" class="text-nowrap logo-img text-center d-block w-100">
                  <h1>Registrasi</h1>
                </a>
                <p class="text-center">Hiduplah dijalan yang benar!</p>
                 <form method="POST" action="{{ route('register') }}">
                        @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Ulangi Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                  </div>               
                  <button type="submit" class="btn btn-danger w-100 py-8 fs-4 mb-4 rounded-2">Buat Akun</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Sudah punya akun log in?</p>
                    <a class="text-primary fw-bold ms-2" href="{{ route('login') }}">Masuk sekarang!</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

