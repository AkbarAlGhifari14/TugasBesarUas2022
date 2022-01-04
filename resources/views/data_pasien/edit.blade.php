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
              <h3 class="box-title">Pasien Update</h3>
            
              
        <form action="/data_pasien/{{$data_pasien->id}}/update"method="POST">
          {{csrf_field()}}
          <form role="form">
              <div class="box-body">
                <div class="form-group">
  
    <label for="exampleInputEmail1">Nama Pasien</label>
    <input name="nama_pasien" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pasien" value="{{$data_pasien->nama_pasien}}">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Alamat</label>
    <input  name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat" value="{{$data_pasien->alamat}}">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Telepon</label>
    <input  name="telepon" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telepon" value="{{$data_pasien->telepon}}">
    </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
    <select name ="jk" class="form-control" id="exampleFormControlSelect1">
      <option value="Laki-Laki">Laki-Laki</option>
      <option value="Perempuan">Perempuan</option>   
    </select>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Lahir</label>
    <input  name="tgl_lahir" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Lahir" readonly value="{{$data_pasien->tgl_lahir}}">
    </div>
  
    <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Pemeriksaan</label>
    <input  name="tgl_pemeriksaan" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Pemeriksaan" readonly  value="{{$data_pasien->tgl_pemeriksaan}}">
</div> 

<button type="submit" class="btn btn-warning">Update</button>
</form> 
</div>
    </div>
    </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>

</div>
      <!-- /.row -->
</section>

    @endsection


