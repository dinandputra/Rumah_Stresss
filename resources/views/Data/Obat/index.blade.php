@extends('adminlte::page')

@section('title', 'Medicine Page')

@section('content_header')
    
@stop

@section('content')
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <center>
                    <h1>Data Karyawan</h1>
                </center>
                <div class="card-tools">
                    <a href="{{route('create.karyawan')}}" class="btn btn-success"> Tambah Data &nbsp; <i class="fas fa-plus"></i> </a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Kode Obat</th>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Foto</th>
                    </tr>
                    @foreach ($obat as $obt)
                    <tr>
                        <td> {{$obt->id}} </td>
                        <td> {{$obt->kode_obat}} </td>
                        <td> {{$obt->nama_obat}} </td>
                        <td> {{$obt->jenis}} </td>
                        <td> {{$obt->harga}} </td>
                        <td> {{$obt->stok}} </td>
                        <td>
                            <img style="width:80px; height:90px" src="{{ asset('stokFoto/' . $obt->photo) }}">
                        </td>
                    </tr>
                    @endforeach
                </table>
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