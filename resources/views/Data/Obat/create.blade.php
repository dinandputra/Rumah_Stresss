@extends('adminlte::page')

@section('title', 'Medicine Page')

@section('content_header')
    
@stop

@section('content')
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <center>
                    <h1>Tambah Data Obat</h1>
                </center>
            </div>
            
            <div class="card-body">
                <form action="{{route('store.obat')}}" enctype="multipart/form-data" method="post">
                 @csrf
                    <div class="form-group">
                        <label> Kode Obat </label>
                        <input type="text" id="kode_obat" name="kode_obat" class="form-control">
                    </div>

                    <div class="form-group">
                        <label> Nama Obat </label>
                        <input type="text" id="nama_obat" name="nama_obat" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label> Jenis Obat </label>
                        <select name="jenis" id="jenis" class="form-control">
                            <option value="obat_luar"> Obat Dalam </option>
                            <option value="obat_dalam"> Obat Luar </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label> Harga </label>
                        <input type="text" id="harga" name="harga" class="form-control">
                    </div>

                    <div class="form-group">
                        <label> Stok </label>
                        <input type="text" id="stok" name="stok" class="form-control">
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