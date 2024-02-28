@extends('layouts.utama')
@extends('layouts.menu')  

@section('judul')Data Penyakit @endsection

@section('isi')     
    <div class="body-wrapper">
        <!-- Header Sudah Dihapus  -->
      <div class="container m-0">
        <div class="card">
          <div class="card-body">
            <a href="{{ route('penyakit.create') }}" class="btn btn-primary">Tambah</a>
            <hr>
            <h5 class="card-title fw-semibold mb-4">Data Penyakit</h5>

             @if ($message = Session::get('success'))
                         <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                            <strong> {{ $message }} </strong>
                        </div>                           
                    @endif
                     @if ($message = Session::get('error'))
                         <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                            <strong> {{ $message }} </strong>
                        </div>                           
                    @endif  

            <div class="table-responsive rounded-2 mb-4">
                <table class="table border  table-striped">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>#</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th> Solusi</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($penyakit as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $data->kode }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{!! nl2br($data->solusi) !!}</td>
                            <td>
                                <a href="" class="text-primary m-0"><i class="ti ti-edit "></i> Edit</a> 
                                <hr class="m-1">
                                <a href="" class= "text-danger"><i class="ti ti-trash "></i> Hapus</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">
                                Data Penyakit Kosong.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                 {{ $penyakit->withQueryString()->links('pagination::bootstrap-5') }}          
                
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection




