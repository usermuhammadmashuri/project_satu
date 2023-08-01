@extends('layout1.main2')
@section('content')

<div class="card">
    <div class="card-body">

<h4><b>Edit Data Transaksi</b></h1>
<br>
<form action="{{url('karyawan/edit_proses')}}" method="POST">
@csrf
<input type="hidden" name="id_karyawan" value="{{$karyawan->id_karyawan}}">
<div class="mb-3 row">
    <label for="nik_karyawan" class="col-sm-2 col-form-label">Nik karyawan</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nik_karyawan" value="{{$karyawan->nik_karyawan}}" name="nik_karyawan">
    </div>
</div>
<div class="mb-3 row">
    <label for="nama_karyawan" class="col-sm-2 col-form-label">Nama karyawan</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nama_karyawan" value="{{$karyawan->nama_karyawan}}" name="nama_karyawan">
    </div>
</div>
<div class="mb-3 row">
    <label for="alamat_karyawan" class="col-sm-2 col-form-label">alamat karyawan</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="alamat_karyawan" value="{{$karyawan->alamat_karyawan}}" name="alamat_karyawan">
    </div>
</div>
<div class="mb-3 row">
    <label for="nohp_karyawan" class="col-sm-2 col-form-label">Nohp karyawan</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="nohp_karyawan" value="{{$karyawan->nohp_karyawan}}" name="nohp_karyawan">
    </div>
</div>
<input type="submit" value="Update" class="btn btn-primary float-right">

</form>
</div>
</div>
@endsection