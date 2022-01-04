@extends('layouts.master')

@section('content')
        <!-- @if(session('sukses'))
    <div class="alert alert-primary" role="alert">
{{session('sukses')}}
</div>
@endif -->

<div class="box-header">

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary pull-right btn-sm" data-toggle="modal" data-target="#exampleModal">Tambah Data Resepsionis</button>
</div>



<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Resepsionis</h3>

              
            </div>
    <!-- /.box-header -->
   <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tr>
                    
                    <th>ID RESEPSIONIS</th>
                    <th>NAMA RESEPSIONIS</th>
                    <th>ALAMAT</th>
                    <th>TELEPON</th>
                   
                    <th>AKSI</th>
                </tr>
                @foreach($data_resepsionis as $dataresepsionis)
                <tr>
                <td>{{$dataresepsionis->id_resepsionis}}</td>
                    <td>{{$dataresepsionis->nama_resepsionis}}</td>
                    <td>{{$dataresepsionis->alamat}}</td>
                    <td>{{$dataresepsionis->telepon}}</td>
             
                    <td><a href="/data_resepsionis/{{$dataresepsionis->id}}/edit" class="btn-warning btn-sm">Edit</a>
                        <a href="/data_resepsionis/{{$dataresepsionis->id}}/delete" class=" btn btn-danger btn-sm"onclick="return confirm('Yakin Mau Di Hapus ?')">Hapus</a>
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
      <form action="/data_resepsionis/create"method="POST">
          {{csrf_field()}}
          <div class="form-group">
    <label for="exampleInputEmail1">Id Resepsionis</label>
    <input name="id_resepsionis" type="text" class="form-control" required="" value="{{$id}}"readonly="" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id Resepsionis">
    </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Resepsionis</label>
    <input name="nama_resepsionis" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Resepsionis">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Email Resepsionis</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Resepsionis">
    </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat</label>
    <textarea  name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Telepon</label>
    <input  name="telepon" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telepon">
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

