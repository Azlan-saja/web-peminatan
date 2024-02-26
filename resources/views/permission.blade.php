@extends('layouts.utama')

@section('judul')Anda tidak memiliki akses @endsection

@section('isi')
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-10 col-lg-10 col-xxl-10">
            <div class="card mb-0">                                
              <div class="card-body text-center bg-dark text-white">
                    <h1 class="text-white">
                        Anda tidak memiliki akses.                       
                    </h1>                
                <p class="text-center">Hiduplah dijalan yang benar!</p>               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection


