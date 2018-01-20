@extends('layouts.index')
@section('content')
<div class="container">
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Data </div>
  <div class="panel-body">
    <h1 class="my-2">
        <small>Anak buah Pawit</small>
      </h1>
  </div>

  <!-- Table -->
  <table class="table">
<th>ID</th>
<th>NIS</th>
<th>Nama</th>
<th>Tempat Lahir</th>
<th>Tanggal Lahir</th>
<th>Alamat</th>
<th>Cita-Cita</th>
<th>Hobi</th>
<th>Foto</th>
@foreach($pa as $wit)
<tr>
<td>{{$wit -> id}}</td>
<td>{{$wit -> nis}}</td> 
<td>{{$wit -> nama}}</td> 
<td>{{$wit -> tempat_lahir}}</td> 
<td>{{$wit -> tanggal_lahir}}</td> 
<td>{{$wit -> alamat}}</td> 
<td>{{$wit -> cita}}</td> 
<td>{{$wit -> hobi}}</td>
<td><img src="{{ asset('pawit/'.$wit->gambar)  }}" style="max-height:125px;max-width:125px;margin-top:7px;"></td>
</tr>
@endforeach
</table></div></div>
</div>
@endsection