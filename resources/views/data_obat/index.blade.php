@extends('layouts.master')

@section('content')
        <!-- @if(session('sukses'))
    <div class="alert alert-primary" role="alert">
{{session('sukses')}}
</div>
@endif -->

<div class="box-header">

<!-- Button trigger modal -->
<a href="data_obat/exportpdf" class="btn btn-sm btn-primary">ExportPDF</a>
<a href="data_obat/export" class="btn btn-sm btn-primary">ExportExcel</a>
<button type="button" class="btn btn-primary pull-right btn-sm" data-toggle="modal" data-target="#exampleModal">Tambah Data Obat</button>
</div>



<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Obat</h3>

              
            </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tr>
                  
                    <th>ID OBAT</th>
                    <th>NAMA OBAT</th>
                    <th>ID KATEGORI</th>
                    <th>NAMA KATEGORI</th>
                    <th>JENIS OBAT</th>
                    <th>KETERANGAN</th>
                    <th>HARGA</th>
                    <th>Avatar</th>
                    <th>STOK</th>
                    <th>AKSI</th>
                </tr>
                @foreach($data_obat as $dataobat)
                <tr>
                    <td>{{$dataobat->id_obat}}</td>
                    <td>{{$dataobat->nama_obat}}</td>
                    <td>{{$dataobat->id_kategori}}</td>
                    <td>{{$dataobat->datakategori->nama_kategori}}</td>
                    <td>{{$dataobat->jenis_obat}}</td>
                    <td>{{$dataobat->keterangan}}</td>
                    <td>Rp. {{$dataobat->harga}}</td>
                    <td><img src="{{$dataobat->getAvatar()}}" height="75"/></td>
                    <td>@if ($dataobat['status'] == 'ada')
                   
							<span class="btn btn-flat btn-success btn-block">Tersedia <i class="fa fa-check"></i></span>
							@else
							<span class="btn btn-flat btn-danger btn-block">Habis <i class="fa fa-close"></i></span>
							@endif
						</td>
                    <td><a href="/data_obat/{{$dataobat->id}}/edit" class="btn-warning btn-sm ">Edit</a>
                        <a href="/data_obat/{{$dataobat->id}}/delete" class=" btn btn-danger btn-sm"onclick="return confirm('Yakin Mau Di Hapus ?')">Hapus</a>
                    </td>
                </tr>
                @endforeach
                <tr>
                <td colspan="5"></td>
                <th>SUB TOTAL</th>
                <th>Rp.{{ $dataobat->sum('harga') }}</th>
                </tr>
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
      <form action="/data_obat/create"method="POST"enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
    <label for="exampleInputEmail1">Id Obat</label>
    <input name="id_obat" type="text" class="form-control" required="" value="{{$id}}"readonly="" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id Obat">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Obat</label>
      <input  name="nama_obat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Obat">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Jenis Obat</label>
    <select name ="jenis_obat" class="form-control" id="exampleFormControlSelect1">
      <option disabled selected>==Pilih Jenis Obat ==</option>
      <option value="Kapsul">Kapsul</option>
      <option value="Cair">Cair</option>   
    </select>
    <div class="form-group">
      <label for="data_pasien">Id Kategori</label>
      <select name ="id_kategori" id="id_kate" class="form-control">
        
        <option disabled selected>==Pilih Kategori ==</option>
        @foreach ($data_kategori_obat as $data)
        <option value="{{$data['id_kategori']}}" data-nama_kategori="{{$data['nama_kategori']}}">{{$data['id_kategori']}}|||{{$data['nama_kategori']}}</option>
        
        @endforeach
      </select>
      
    </div>
    
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Kategori</label>
      <input name="nama_kategori" type="text" class="form-control" id="pp" aria-describedby="emailHelp" placeholder="Nama Kategori"readonly>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
$(document).ready(function(){
  $('#id_kate').on('change', function () {
    $('#id_kate option:selected').each(function () {
    var nama_kategori = $(this).data('nama_kategori');
    $('#pp').val(nama_kategori);
  });
});
});


</script>
    </div>
  <div class="form-group">
  <label for="exampleFormControlTextarea1">Keterangan</label>
  <textarea  name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  
    <div class="form-group">
    <label for="exampleInputEmail1">Harga</label>
    <input  name="harga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Avatar</label>
    <input  name="avatar" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga">
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

