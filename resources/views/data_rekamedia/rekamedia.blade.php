@extends('layouts.master')

@section('content')
     
        @if(session('sukses'))
    <div class="alert alert-primary" role="alert">
{{session('sukses')}}
</div>
@endif
<section class="content">
      <div class="row">
      
         <!-- left column -->
         <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Rekamedia</h3>
            
              
        <form action="/data_rekamedia/create"method="POST">
      
          {{csrf_field()}}
          <form role="form">
              <div class="box-body">
                <div class="form-group">
                <div class="form-group">
  

  <input name="id_pasien" type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id Pasien" readonly value="{{$data_rekamedia->datapasien->id_pasien}}">
  </div>
    <label for="exampleInputEmail1">Nama Pasien</label>
    <input name="nama_pasien" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pasien" readonly value="{{$data_rekamedia->datapasien->nama_pasien}}">
    </div>
    <div class="form-group">
  
    <input  name="id_dokter" type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id Dokter" readonly value="{{$data_rekamedia->datadokter->id_dokter}}">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Nama Dokter</label>
    <input  name="nama_dokter" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Dokter" readonly value="{{$data_rekamedia->datadokter->nama_dokter}}">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Pendaftaran</label>
    <input  name="tgl_pendaftaran" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Pendaftaran" readonly value="{{$data_rekamedia->tgl_pendaftaran}}">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Diagnosis</label>
    <input name="diagnosis" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Diagnosis">
    </div>
  
    <div class="form-group">
    <label for="exampleInputEmail1">Tindakan</label>
    <input  name="tindakan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tindakan">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Berat Badan</label>
    <input  name="berat_badan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Berat Badan">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Periksa</label>
    <input  name="tgl_periksa" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Periksa">
    </div>

<button type="submit" class="btn btn-danger btn-sm">Tangani Sekarang</button>
</form> 
</div>
    </div>
    </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>


      <!-- /.row -->
</section>

    @endsection


