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
              <h3 class="box-title">Transaksi Pembayaran</h3>
            
              
   
              <form action="/data_transaksi/create"method="POST">
      
          {{csrf_field()}}
          <form role="form">
              <div class="box-body">
              <div class="form-group">
              <label for="exampleInputEmail1">ID Transaksi</label>
              <input name="id_transaksi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pasien" readonly value="{{$id}}">
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">ID Pasien</label>
  <input name="id_pasien" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pasien" readonly value="{{$data_transaksi->id_pasien}}">
  </div>
                <div class="form-group">
  
    <label for="exampleInputEmail1">Nama Pasien</label>
    <input name="nama_pasien" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pasien" readonly value="{{$data_transaksi->datapasien->nama_pasien}}">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">ID Dokter</label>
    <input  name="id_dokter" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Dokter" readonly value="{{$data_transaksi->id_dokter}}">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Nama Dokter</label>
    <input  name="nama_dokter" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Dokter" readonly value="{{$data_transaksi->datadokter->nama_dokter}}">
    </div>
    
  
      
  
  
  <div class="form-group">
  <label for="exampleInputEmail1">Total Bayar</label>
  <input  name="total_bayar" type="text"    class="form-control" id="harga" onFocus = "mulaihitung()" onBlur = "berhentihitung()" aria-describedby="emailHelp"readonly placeholder="Total Bayar" readonly value ="{{$data_transaksi->total_obat}}">
 
</div>
    
  <div class="form-group">
  <label for="exampleInputEmail1">Bayar</label>
  <input  name="bayar" type="text" class="form-control" id="bayar" onfocus="mulaihitung()" onBlur="berhentihitung()" aria-describedby="emailHelp"  placeholder="Bayar">
    </div>
    
    
  <div class="form-group">
  <label for="exampleInputEmail1">Kembalian</label>
  <input  name="kembalian" type="text"  class="form-control"  id="kembalian"readonly aria-describedby="emailHelp"  placeholder="Kembalian">

  </div>
  <script type="text/javascript">
        function mulaihitung(){
          Interval= setInterval("hitung()",1);
        }
        function hitung(){
            harga  =parseInt(document.getElementById("harga").value);
            bayar  =parseInt(document.getElementById("bayar").value);
          kembalian  =bayar-harga;
          document.getElementById ("kembalian").value = kembalian;
      }
      function berhentihitung(){
        clearInterval(Interval);
      }
    
      </script>
    <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Pembayaran</label>
    <input  name="tgl_pembayaran" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Pembayaran">
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

   


