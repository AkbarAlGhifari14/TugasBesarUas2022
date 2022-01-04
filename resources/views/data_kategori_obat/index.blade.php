@extends('layouts.master')

@section('content')
        <!-- @if(session('sukses'))
    <div class="alert alert-primary" role="alert">
{{session('sukses')}}
</div>
@endif -->

<div class="box-header">

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary pull-right btn-sm" data-toggle="modal" data-target="#exampleModal">Tambah Data Kategori Obat</button>
</div>



<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Kategori Obat</h3>

              
            </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tr>
                  
                    <th>ID KATEGORI</th>
                    <th>KATEGORI OBAT</th>
                
                    <th>AKSI</th>
                </tr>
                @foreach($data_kategori_obat as $datakategoriobat)
                <tr>
                    <td>{{$datakategoriobat->id_kategori}}</td>
                    <td>{{$datakategoriobat->nama_kategori}}</td>
               
                    <td>
                        <a href="/data_kategori_obat/{{$datakategoriobat->id}}/delete" class=" btn btn-danger btn-sm"onclick="return confirm('Yakin Mau Di Hapus ?')">Hapus</a>
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
      <form action="/data_kategori_obat/create"method="POST">
          {{csrf_field()}}
          <div class="form-group">
    <label for="exampleInputEmail1">Id Kategori</label>
    <input name="id_kategori" type="text" class="form-control" required="" value="{{$id}}"readonly="" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id Kategori">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Nama Kategori</label>
    <input name="nama_kategori" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Kategori">
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

