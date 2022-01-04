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
              <h3 class="box-title">Dokter Update</h3>
            
              
        <form action="/data_dokter/{{$data_dokter->id}}/update"method="POST">
          {{csrf_field()}}
          <form role="form">
              <div class="box-body">
                <div class="form-group">
  
    <label for="exampleInputEmail1">Nama Dokter</label>
    <input name="nama_dokter" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Dokter" value="{{$data_dokter->nama_dokter}}">
  </div>
  <div class="form-group">
  <label for="exampleFormControlTextarea1">Alamat</label>
  <textarea  name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$data_dokter->alamat}}</textarea>
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Telepon</label>
    <input  name="telepon" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telepon" value="{{$data_dokter->telepon}}">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Tarif Pemeriksaan</label>
    <input  name="tarif_pemeriksaan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tarif Pemeriksaan" value="{{$data_dokter->tarif_pemeriksaan}}">

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

  


