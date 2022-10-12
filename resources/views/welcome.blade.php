@extends('layouts.master')
@section('style-page')
    <style>

    </style>
@endsection
@section('title-page')
    <h4 class="mb-sm-0">Notifications</h4>
    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
            <li class="breadcrumb-item active">Compare Text</li>
        </ol>
    </div>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card card-body">
                <h3 class="card-title">Compare Text</h3>
            </div>
        </div>
        <div class="col-lg-5 col-sx-5 col-md-5">
            <div class="card card-body">
                <h3 class="card-title">Original Text</h3>
                <p class="card-text">Original Text...</p>
                <div class="">
                    <textarea class="form-control" rows="10"></textarea>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-sx-5 col-md-5">
            <div class="card card-body">
                <h3 class="card-title">Original Text</h3>
                <p class="card-text">Original Text...</p>
                <div class="">
                    <textarea class="form-control" rows="10"></textarea>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script-page')
    <script>
        console.log("Oke nha");
    </script>
@endsection