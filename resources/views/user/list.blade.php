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
    <div class="col-12">
        <div class="card card-body">
            <h3 class="card-title">List User</h3>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Create At</th>
                </tr>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
@section('script-page')
    <script>
        console.log("Oke nha");
    </script>
@endsection