@extends('layouts.master')
<?php $no = 1; ?>
@section('content')
        <!-- @if(session('sukses'))
    <div class="alert alert-primary" role="alert">
{{session('sukses')}}
</div>
@endif -->

<div class="box-header">

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary pull-right btn-sm" data-toggle="modal" data-target="#exampleModal">Tambah Data Pasien</button>
</div>



<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pasien</h3>

              
            </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tr>        
                  <th>ID PASIEN</th>
                    <th>NAMA PASIEN</th>
                    <th>ALAMAT</th>
                    <th>TELEPON</th>
                    <th>TANGGAL LAHIR</th>
                    <th>JENIS KELAMIN</th>
                    <th>TANGGAL PEMERIKSAAN</th>
                    <th>AKSI</th>
                </tr>
                @foreach($data_pasien as $datapasien)
                <tr>
                <td>{{$datapasien->id_pasien}}</td>
                    <td>{{$datapasien->nama_pasien}}</td>
                    <td>{{$datapasien->alamat}}</td>
                    <td>{{$datapasien->telepon}}</td>
                    <td>{{$datapasien->tgl_lahir}}</td>
                    <td>{{$datapasien->jk}}</td>
                    <td>{{$datapasien->tgl_pemeriksaan}}</td>
                    <td><a href="/data_pasien/{{$datapasien->id}}/edit" class="btn-warning btn-sm">Edit</a>
                        <a href="/data_pasien/{{$datapasien->id}}/delete" class=" btn btn-danger btn-sm"onclick="return confirm('Yakin Mau Di Hapus ?')">Hapus</a>
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
      <form action="/data_pasien/create"method="POST">
          {{csrf_field()}}
          <div class="form-group">
    <label for="exampleInputEmail1">Id Pasien</label>
    <input name="id_pasien" type="text" class="form-control" required="" value="{{$id}}"readonly="" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id Pasien">
    </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Pasien</label>
    <input name="nama_pasien" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pasien">
    </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat</label>
    <textarea  name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Telepon</label>
    <input  name="telepon" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telepon">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Lahir</label>
    <input  name="tgl_lahir" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Lahir">
    </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
    <select name ="jk" class="form-control" id="exampleFormControlSelect1">
      <option value="Laki-Laki">Laki-Laki</option>
      <option value="Perempuan">Perempuan</option>   
    </select>
  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Tanggal Pemeriksaan</label>
    <input  name="tgl_pemeriksaan" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Pemeriksaan">
    
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

