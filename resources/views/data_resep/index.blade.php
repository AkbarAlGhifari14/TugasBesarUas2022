@extends('layouts.master')

@section('content')
        <!-- @if(session('sukses'))
    <div class="alert alert-primary" role="alert">
{{session('sukses')}}
</div>
@endif -->




<section class="content">
     
       
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Resep Pasien</h3>

              
         
          <!-- /.box-header -->
          <div class="box-body">
            <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
            <thead>
                <tr>
              
                <th>No</th>
                    <th>ID PASIEN</th>
                    <th>NAMA PASIEN</th>
                    <th>ID DOKTER</th>
                    <th>NAMA DOKTER</th>
                    <th>TARIF DOKTER</th>
                    <th>ID OBAT </th>
                    <th>NAMA_OBAT </th>

                    <th>HARGA OBAT </th>
                    <th>JUMLAH</th>
                    <th>ATURAN MAKAN</th>
                    <th>TANGGAL TEBUS RESEP</th>
                    <th>TOTAL RESEP</th>
             
                    <th>AKSI</th>
                    
         
                </tr>
                </thead>
                <tbody>
                <tr>
                @foreach($data_resep as $key => $dataresep)
               
                <td>{{$data_resep->firstItem() + $key}}</td>
                    <td>{{$dataresep->id_pasien}}</td>
                    <td>{{$dataresep->datapasien->nama_pasien}}</td>
                    <td>{{$dataresep->id_dokter}}</td>
                    <td>{{$dataresep->datadokter->nama_dokter}}</td>
                    <td>Rp.{{$dataresep->datadokter->tarif_pemeriksaan}}</td>
                    <td>{{$dataresep->id_obat}}</td>
                    <td>{{$dataresep->dataobat->nama_obat}}</td>

                    <td>Rp.{{$dataresep->harga}}</td>
                    <td>{{$dataresep->jumlah}}</td>
                    <td>{{$dataresep->aturan_makan}}</td>
                    <td>{{$dataresep->tgl_tebus_resep}}</td>
                    <td>Rp.{{$dataresep->total_obat}}</td>
                    <td><a href="/data_resep/{{$dataresep->id}}/transaksi" class="btn-primary btn-sm">Bayar</a>
                        <a href="/data_resep/{{$dataresep->id}}/delete" class=" btn btn-danger btn-sm"onclick="return confirm('Yakin Mau Di Hapus ?')">Hapus</a>
                    </td>
                </tr>
                @endforeach
             
                <td colspan="10"></td>
                <th>SUB TOTAL</th>
                <th>Rp.{{ $dataresep->sum('total_obat') }}</th>
               
                </tr>
                </tbody>
            </table>
            <div >
               Showing
              {{$data_resep->firstItem()}}
              to
              {{$data_resep->lastItem()}}
              of
              {{$data_resep->total()}}
              entries
            </div>
            
            <div class="pull-right">
        {{$data_resep->links()}} 
  </div>
  
  </section>

@endsection

