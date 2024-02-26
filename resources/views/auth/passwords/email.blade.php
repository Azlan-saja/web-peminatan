@extends('layouts.utama')

@section('judul')Reset Password @endsection

@section('isi')

 <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="/" class="text-nowrap logo-img text-center d-block w-100">
                  <h1>Reset Password</h1>
                </a>
                <p class="text-center">Hiduplah dijalan yang benar!</p>
                 <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email Terdaftar</label>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  
                  <button type="submit" class="btn btn-danger w-100 py-8 fs-4 mb-4 rounded-2">Kirim Permintaan</button>
                  <div class="d-flex align-items-center justify-content-center text-center">
                    <p class="fs-4 mb-0 fw-bold">Sudah ingat password lama? <br> <a class="text-primary fw-bold ms-2" href="{{ route('login') }}">Login sekarang!</a></p>
                    
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="/" class="text-nowrap logo-img text-center d-block w-100">
                  <h1>Atur Ulang Password</h1>
                </a>
                <p class="text-center">Hiduplah dijalan yang benar!</p>
                 <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                 
                  <button type="submit" class="btn btn-danger w-100 py-8 fs-4 mb-4 rounded-2">Kirim Permintaan</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Sudah ingat password lama?</p>
                    <a class="text-primary fw-bold ms-2" href="{{ route('login') }}">Login sekarang!</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection




