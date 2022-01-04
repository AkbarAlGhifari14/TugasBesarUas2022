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
              <h3 class="box-title">Data Transaksi Pasien</h3>

              
            </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tr>
                    <th>ID TRANSAKSI</th>
                    <th>ID PASIEN</th>
                    <th>NAMA PASIEN</th>
                    <th>ID DOKTER</th>
                    <th>NAMA DOKTER</th>
                    <th>TOTAL BAYAR</th>
                    <th>BAYAR</th>
                    <th>KEMBALIAN</th>
                    <th>TANGGAL PEMBAYARAN</th>
                    <th>AKSI</th>
                </tr>
                @foreach($data_transaksi as $datatransaksi)
                <tr>
                    <td>{{$datatransaksi->id_transaksi}}</td>
                    <td>{{$datatransaksi->id_pasien}}</td>
                    <td>{{$datatransaksi->datapasien->nama_pasien}}</td>
                    <td>{{$datatransaksi->id_dokter}}</td>
                    <td>{{$datatransaksi->datadokter->nama_dokter}}</td>
                    <td>{{$datatransaksi->total_bayar}}</td>
                    <td>{{$datatransaksi->bayar}}</td>
                    <td>{{$datatransaksi->kembalian}}</td>
                    <td>{{$datatransaksi->tgl_pembayaran}}</td>
                    <td><a href="/data_rekamedia/{{$datatransaksi->id}}/resep" class="btn-primary btn-sm">Struk</a>
                        <a href="/data_rekamedia/{{$datatransaksi->id}}/delete" class=" btn btn-danger btn-sm"onclick="return confirm('Yakin Mau Di Hapus ?')">Hapus</a>
                    </td>
                </tr>
                @endforeach
                <td colspan="5"></td>
                <th>SUB TOTAL</th>
                <th>Rp.{{ $datatransaksi->sum('bayar') }}</th>
               
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
     
      </div>
      <div class="modal-body">
     
      </div>
    </div>
  </div>
@endsection

