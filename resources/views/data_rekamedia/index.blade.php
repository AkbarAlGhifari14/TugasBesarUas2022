@extends('layouts.master')

@section('content')
        <!-- @if(session('sukses'))
    <div class="alert alert-primary" role="alert">
{{session('sukses')}}
</div>
@endif -->




<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Rekamedia</h3>

              
            </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tr>
                    <th>NAMA PASIEN</th>
                    <th>NAMA DOKTER</th>
                    <th>TARIF DOKTER</th>
                    <th>TANGGAL PENDAFTARAN</th>
                    <th>DIAGNOSIS</th>
                    <th>TINDAKAN</th>
                    <th>BERAT BADAN</th>
                    <th>TANGGAL PERIKSA</th>
                    <th>AKSI</th>
                </tr>
                @foreach($data_rekamedia as $datarekamedia)
                <tr>
                    <td>{{$datarekamedia->nama_pasien}}</td>
                    <td>{{$datarekamedia->nama_dokter}}</td>
                    <td>Rp. {{$datarekamedia->datadokter->tarif_pemeriksaan}}</td>
                    <td>{{$datarekamedia->tgl_pendaftaran}}</td>
                    <td>{{$datarekamedia->diagnosis}}</td>
                    <td>{{$datarekamedia->tindakan}}</td>
                    <td>{{$datarekamedia->berat_badan}}</td>
                    <td>{{$datarekamedia->tgl_periksa}}</td>
                    <td><a href="/data_rekamedia/{{$datarekamedia->id}}/resep" class="btn-primary btn-sm">Berikan Resep</a>
                        <a href="/data_rekamedia/{{$datarekamedia->id}}/delete" class=" btn btn-danger btn-sm"onclick="return confirm('Yakin Mau Di Hapus ?')">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </table>
           
            <div>
              
    </section>
  
</div>

         
   
 
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Silahkan Masukan Data</h5>
     
      </div>
      <div class="modal-body">
     
      </div>
    </div>
  </div>
@endsection

