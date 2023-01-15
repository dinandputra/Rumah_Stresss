@extends('adminlte::page')

@section('title', 'Doctor Page')

@section('content_header')
    
@stop

@section('content')
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <center>
                    <h1>Tambah Data Dokter</h1>
                </center>
            </div>
            
            <div class="card-body">
                <form action="{{route('store.dokter')}}" enctype="multipart/form-data" method="post">
                 @csrf
                    <div class="form-group">
                        <label> Kode Dokter </label>
                        <input type="text" id="kode_dokter" name="kode_dokter" class="form-control">
                    </div>

                    <div class="form-group">
                        <label> Nama </label>
                        <input type="text" id="nama" name="nama" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label> Spesialis </label>
                        <input type="text" id="spesialis" name="spesialis" class="form-control">
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