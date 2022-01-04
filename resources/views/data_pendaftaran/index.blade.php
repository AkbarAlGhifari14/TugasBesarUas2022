@extends('layouts.master')

@section('content')
        <!-- @if(session('sukses'))
    <div class="alert alert-primary" role="alert">
{{session('sukses')}}
</div>
@endif -->

<div class="box-header">

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary pull-right btn-sm" data-toggle="modal" data-target="#exampleModal">Tambah Data Pendaftaran</button>
</div>



<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pendaftaran</h3>

              
            </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tr>
                    <th>ID PASIEN</th>
                    <th>NAMA PASIEN</th>
                    <th>ID DOKTER</th>
                    <th>NAMA DOKTER</th>
                    <th>TANGGAL PENDAFTARAN</th>
                    <th>AKSI</th>
                </tr>
                @foreach($data_pendaftaran as $datapendaftaran)
                <tr>
                    <td>{{$datapendaftaran->id_pasien}}</td>
                    <td>{{$datapendaftaran->datapasien->nama_pasien}}</td>
                    <td>{{$datapendaftaran->id_dokter}}</td>
                    <td>{{$datapendaftaran->datadokter->nama_dokter}}</td>
                    <td>{{$datapendaftaran->tgl_pendaftaran}}</td>
                    
                    <td><a href="/data_rekamedia/{{$datapendaftaran->id}}/rekamedia" class="btn-primary btn-sm">Tangani</a>
                        <a href="/data_pendaftaran/{{$datapendaftaran->id}}/delete" class=" btn btn-danger btn-sm"onclick="return confirm('Yakin Mau Di Hapus ?')">Hapus</a>
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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/data_pendaftaran/create"method="POST">
          {{csrf_field()}}
     
<div class="form-group">
    <label for="data_pasien">Id Pasien</label>
    <select name ="id_pasien" id="sel1" class="form-control">
    
    <option disabled selected>==Pilih Pasien==</option>
									@foreach ($data_pasien as $data)
                  <option value="{{$data['id_pasien']}}" data-nama_pasien="{{$data['nama_pasien']}}">{{$data['id_pasien']}}|||{{$data['nama_pasien']}}</option>
                  
									@endforeach
								</select>
  

</div>

<div class="form-group">
    <label for="exampleInputEmail1">Nama Pasien</label>
    <input  type="text" id="p"class="form-control"   required="" readonly aria-describedby="emailHelp" placeholder="Nama Pasien">
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $('#sel1').on('change', function () {
    $('#sel1 option:selected').each(function () {
    var nama_pasien = $(this).data('nama_pasien');
    $('#p').val(nama_pasien);
  });
});
});


</script>
    <div class="form-group">
    <label for="data_pasien">Id Dokter</label>
    <select name ="id_dokter" class="form-control" id="id_dokter" onclick="choosee()">
    
    <option disabled selected>==Pilih Dokter==</option>
									@foreach ($data_dokter as $data)
                  <option value="{{$data['id_dokter']}}"data-nama_dokter="{{$data['nama_dokter']}}">{{$data['id_dokter']}}|||{{$data['nama_dokter']}}</option>
                  
									@endforeach
								</select>
  
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Nama Dokter</label>
    <input  name="nama_pasien" type="text" id="pp"class="form-control"  aria-describedby="emailHelp" placeholder="Nama Dokter"readonly>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $('#id_dokter').on('change', function () {
    $('#id_dokter option:selected').each(function () {
    var nama_dokter = $(this).data('nama_dokter');
    $('#pp').val(nama_dokter);
  });
});
});


</script>
    <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Pendaftaran</label>
    <input  name="tgl_pendaftaran" type="date"  value='{{ @$row->date_start }}' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Pendaftaran">
</div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
    </div>
  </div>

@endsection
    