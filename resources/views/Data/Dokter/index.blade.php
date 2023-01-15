@extends('adminlte::page')

@section('title', 'Doctor Page')

@section('content_header')
    
@stop

@section('content')
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <center>
                    <h1>Data Dokter</h1>
                </center>
                <div class="card-tools">
                    <a href="{{route('create.dokter')}}" class="btn btn-success"> Tambah Data &nbsp; <i class="fas fa-plus"></i> </a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Kode Dokter</th>
                        <th>Nama</th>
                        <th>Spesialis</th>
                        <th>No Telp</th>
                        <th>Alamat</th>
                        <th>Foto</th>
                    </tr>
                    @foreach ($dokter as $dkt)
                    <tr>
                        <td>{{ $dkt->id }}</td>
                        <td>{{ $dkt->kode_dokter }}</td>
                        <td>{{ $dkt->nama }}</td>
                        <td>{{ $dkt->spesialis }}</td>
                        <td>{{ $dkt->no_telp }}</td>
                        <td>{{ $dkt->alamat }}</td>
                        <td>
                            <img style="width:80px; height:90px" src="{{ asset('stokFoto/' . $dkt->photo) }}">
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