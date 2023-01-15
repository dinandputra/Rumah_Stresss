@extends('adminlte::page')

@section('title', 'Employee Page')

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
                        <th>Kode Karyawan</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>No Telp</th>
                        <th>Alamat</th>
                        <th>Foto</th>
                    </tr>
                    @foreach ($karyawan as $kary)
                    <tr>
                        <td>{{ $kary->id }}</td>
                        <td>{{ $kary->kode_karyawan }}</td>
                        <td>{{ $kary->nama }}</td>
                        <td>{{ $kary->jabatan }}</td>
                        <td>{{ $kary->no_telp }}</td>
                        <td>{{ $kary->alamat }}</td>
                        <td>
                            <img style="width:80px; height:90px" src="{{ asset('stokFoto/' . $kary->photo) }}">
                        </td>
                    </tr>
                    @endforeach=
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