@extends('layouts.utama')
@extends('layouts.menu')  

@section('judul')Ubah Data Penyakit @endsection

@section('isi')     
    <div class="body-wrapper">
        <!-- Header Sudah Dihapus  -->
      <div class="container m-0">
        <div class="card">
          <div class="card-body">
            <a href="{{ route('penyakit.index') }}" class="btn btn-dark text-white">Kembali</a>
            <hr>
            <h5 class="card-title fw-semibold mb-4">Ubah Data Penyakit</h5>
            
            <form action="{{ route('penyakit.update' , $penyakit->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-body">                     
                      <div class="mb-3">
                            <div class="row">
                                <label class="col-lg-1 form-label">Kode</label>                         
                              <div class="col-md-11">
                                <input type="text" 
                                    class="form-control  @error('kode') is-invalid @enderror" 
                                    name="kode" 
                                    value="{{ $penyakit->kode }}" required>
                                  @error('kode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>                          
                            </div>
                    </div>                                                                                                        
                      <div class="mb-3">
                            <div class="row">
                                <label class="col-lg-1 form-label">Nama</label>                         
                              <div class="col-md-11">
                                <input type="text" 
                                    class="form-control  @error('nama') is-invalid @enderror" 
                                    name="nama" 
                                    value="{{ $penyakit->nama }}" required>
                                  @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>                          
                            </div>
                    </div>                                                                                                        
                      <div class="mb-3">
                            <div class="row">
                                <label class="col-lg-1 form-label">Solusi</label>                         
                              <div class="col-md-11">
                                <textarea name="solusi" 
                                    class="form-control  @error('solusi') is-invalid @enderror" 
                                    cols="30" rows="5">{{ $penyakit->solusi }}</textarea>
                                 @error('solusi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>                          
                            </div>
                    </div>                                                                                                        
                    <div class="form-actions col-lg-11 ms-auto">
                        <button type="submit" class="btn btn-primary me-6"> Simpan Perubahan </button>              
                    </div>
                </form>
          </div>
        </div>
      </div>
    </div>
@endsection




