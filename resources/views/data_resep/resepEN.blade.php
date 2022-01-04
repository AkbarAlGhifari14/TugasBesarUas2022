<!-- @extends('layouts.master')

@section('content')
     
        @if(session('sukses'))
    <div class="alert alert-primary" role="alert">
{{session('sukses')}}
</div>
@endif
<section class="content">
      <div class="row">
       -->
         <!-- left column -->
         <!-- <div class="col-md-6"> -->
          <!-- general form elements -->
          <!-- <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Resep</h3>
            
              
   
              <form action="/data_resep/create"method="POST">
      
          {{csrf_field()}}
          <form role="form">
              <div class="box-body">
              <div class="form-group">
  
  <label for="exampleInputEmail1">ID Pasien</label>
  <input name="id_pasien" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pasien" readonly value="{{$data_resep->id_pasien}}">
  </div>
                <div class="form-group">
  
    <label for="exampleInputEmail1">Nama Pasien</label>
    <input name="nama_pasien" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pasien" readonly value="{{$data_resep->nama_pasien}}">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">ID Dokter</label>
    <input  name="id_dokter" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Dokter" readonly value="{{$data_resep->id_dokter}}">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Nama Dokter</label>
    <input  name="nama_dokter" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Dokter" readonly value="{{$data_resep->nama_dokter}}">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Tarif Dokter</label>
    <input  name="tarif_pemeriksaan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Dokter" readonly value="{{$data_resep->datadokter->tarif_pemeriksaan}}">
    </div>
    <div class="form-group">
    <label for="data_pasien">Id Obat</label>
  
      <select name ="id_obat" id="id_kate" class="form-control">
        
        <option disabled selected>==Pilih Kategori ==</option>
        @foreach ($data_obat as $data)
        <option value="{{$data['id_obat']}}" data-nama_kategori="{{$data['nama_obat']}}"data-harga="{{$data['harga']}}">{{$data['id_obat']}}|||{{$data['nama_obat']}}|||Rp.{{$data['harga']}}</option>
        
        @endforeach
      </select>
      
    </div>
  
  <div class="form-group">
  <label for="exampleInputEmail1">Nama Obat</label>
  <input  name="nama_obat" type="text" class="form-control" id="pp" aria-describedby="emailHelp"readonly placeholder="Nama Obat">
    </div>
    
  <div class="form-group">
  <label for="exampleInputEmail1">Harga Obat</label>
  <input  name="harga" type="text" class="form-control" id="ppp" aria-describedby="emailHelp"readonly  placeholder="Harga Obat">
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
$('#id_kate').on('change', function () {
$('#id_kate option:selected').each(function () {
var nama_kategori = $(this).data('nama_kategori');
var harga = $(this).data('harga');
$('#pp').val(nama_kategori);
$('#ppp').val(harga);
});
});
});


</script>
    <div class="form-group">
    <label for="exampleInputEmail1">Jumlah</label>
    <input  name="jumlah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Aturan Makan</label>
    <input  name="aturan_makan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Aturan Makan">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Tebus Resep</label>
    <input  name="tgl_tebus_resep" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Tebus Resep">
    </div>
   

<button type="submit" class="btn btn-danger btn-sm">Tangani Sekarang</button>
</form> 
</div>
    </div>
    </div>
    
        </div>
     
      </div>


     
</section> -->
<!-- @endsection -->
