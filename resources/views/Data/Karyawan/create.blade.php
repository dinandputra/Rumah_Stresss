@extends('adminlte::page')

@section('title', 'Employee Page')

@section('content_header')
    
@stop

@section('content')
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <center>
                    <h1>Tambah Data Karyawan</h1>
                </center>
            </div>
            
            <div class="card-body">
                <form action="{{route('store.karyawan')}}" enctype="multipart/form-data" method="post">
                 @csrf
                    <div class="form-group">
                        <label> Kode Karyawan </label>
                        <input type="text" id="kode_karyawan" name="kode_karyawan" class="form-control">
                    </div>

                    <div class="form-group">
                        <label> Nama </label>
                        <input type="text" id="nama" name="nama" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label> Jabatan </label>
                        <select name="jabatan" id="jabatan" class="form-control">
                            <option value="apoteker"> Apoteker </option>
                            <option value="perawat"> Perawat </option>
                            <option value="ahli_gizi"> Ahli Gizi </option>
                            <option value="bidan"> Bidan </option>
                            <option value="kebersihan"> Kebersihan </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label> No Telp </label>
                        <input type="text" id="no_telp" name="no_telp" class="form-control">
                    </div>

                    <div class="form-group">
                        <label> Alamat </label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="4"></textarea>
                    </div>

                    <div class="form-group">
                        <label> Foto </label>
                        <input type="file" id="photo" name="photo" class="form-control">
                    </div>

                    <br>

                    <button type="submit" class="btn btn-success float-lg-right"> Tambah Data &nbsp; <i class="fas fa-check"></i> </button>
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop