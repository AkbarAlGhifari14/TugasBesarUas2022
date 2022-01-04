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
              <h3 class="box-title">Obat Update</h3>
            
              
        <form action="/data_obat/{{$data_obat->id}}/update"method="POST">
          {{csrf_field()}}
          <form role="form">
              <div class="box-body">
                <div class="form-group">
  
    <label for="exampleInputEmail1">Nama Obat</label>
    <input name="nama_obat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Obat" value="{{$data_obat->nama_obat}}">
    </div>
    <div class="form-group">
      <label for="data_pasien">Id Kategori</label>
      <select name ="id_kategori" id="id_kate" class="form-control">
        
        <option disabled selected>==Pilih Kategori ==</option>
        @foreach ($data_kategori_obat as $data)
        <option value="{{$data['id_kategori']}}" data-nama_kategori="{{$data['nama_kategori']}}">{{$data['id_kategori']}}|||{{$data['nama_kategori']}}</option>
        
        @endforeach
      </select>
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
      <label for="exampleFormControlSelect1">Jenis Obat</label>
    <select name ="jenis_obat" class="form-control" id="exampleFormControlSelect1">
      <option disabled selected>==Pilih Jenis Obat ==</option>
      <option value="Kapsul">Kapsul</option>
      <option value="Cair">Cair</option>   
    </select>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Keterangan</label>
    <textarea  name="keterangan" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$data_obat->keterangan}}</textarea>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Harga</label>
    <input  name="harga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga" value="{{$data_obat->harga}}">
  
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
    </section

    @endsection


