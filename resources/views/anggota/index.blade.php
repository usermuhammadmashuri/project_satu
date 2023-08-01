@extends('layout1.main2')
@section('content')

<h4><b>Daftar Anggota Perpustakaan</b></h4>
<br>
<a href="{{ asset('anggota/tambah')  }}">Tambah Data</a>
<table class="table table-striped" width="100%">
 <tr class="table-primary">
    <td><b>No</td>
    <td><b>ID Anggota</td>
    <td><b>Nama Anggota</td>
    <td><b>Alamat</td>
    <td><b>No HP</td>
    <td><b>Aksi</td>
 </tr>   
<?php
$no=0;
foreach ($anggota as $rows){
$no++;
?>
<tr>
    <td>{{ $no }}</td>
    <td>{{ $rows->id_anggota }}</td>
    <td>{{ $rows->nama_anggota }}</td>
    <td>{{ $rows->alamat }}</td>
    <td>{{ $rows->no_hp }}</td>
    <td>
        <a href="{{ asset('anggota/edit/'.$rows->id_anggota ) }}">Edit</a>

        <a href="{{ asset('anggota/delete/'.$rows->id_anggota ) }}">delete</a>
</td>
</tr>
<?php 
}
?>
</table>
@endsection