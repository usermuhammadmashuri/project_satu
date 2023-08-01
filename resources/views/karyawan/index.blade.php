@extends('layout1.main2')
@section('content')

<div class="card">
    <div class="card-body">

<h4><b>Data Master</b></h4>
<br>
<a href="{{ url('karyawan/tambah')  }}" class="btn btn-primary mb-2">Tambah Data</a>
<table class="table table-striped" width="100%">
 <tr class="table table-striped table-primary">
    <td><b>No</td>
    <td><b>id_karyawan</td>
    <td><b>nik_karyawan</td>
    <td><b>nama_karyawan</td>
    <td><b>alamat_karyawan</td>
    <td><b>Nohp_karyawan</td>
    <td><b>Aksi</td>
 </tr>   
<?php 
$no=0;
foreach ($karyawan as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->id_karyawan }}</td>
    <td>{{ $rows->nik_karyawan }}</td>
    <td>{{ $rows->nama_karyawan }}</td>
    <td>{{ $rows->alamat_karyawan }}</td>
    <td>{{ $rows->Nohp_karyawan }}</td>
    <td>
        <div class="btn-group">

            <a  class="btn btn-warning" href="{{ url('karyawan/edit/'.$rows->id_karyawan ) }}">Edit</a>
            <a  class="btn btn-danger" href="{{ url('karyawan/delete/'.$rows->id_karyawan ) }}">Del</a>
        </div>
        </td>
</tr>
<?php 
}
?>
</table>
        
</div>
</div>
@endsection