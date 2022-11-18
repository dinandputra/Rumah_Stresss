@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}

                    @can('isAdmin')
                        <div>
                            <button class="btn btn-outline-success btn-lg"> You have Admin Access </button>
                            <button onclick="location.href='http://127.0.0.1:8000/';" class="btn btn-outline-dark"> Back to Home </button>
                        </div>
                    @elsecan('isManager')
                        <div >
                            <button class="btn btn-outline-primary btn-lg"> You have Manager Access </button>
                            <button onclick="location.href='http://127.0.0.1:8000/';" class="btn btn-outline-dark"> Back to Home </button>
                        </div>
                    @else
                        <div >
                            <button class="btn btn-outline-info btn-lg"> You have User Access </button>
                            <button onclick="location.href='http://127.0.0.1:8000/';" class="btn btn-outline-dark"> Back to Home </button>
                        </div>
                    @endcan

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
