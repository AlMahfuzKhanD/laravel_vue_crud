{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        
    </head>
    <body>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" id="app">
                    <Directory></Directory>
                </div>
            </div>
        </div>


        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html> --}}
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
         
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Laravel Vue Js DataTable Example</div>
                     
                <div class="card-body">
                  <datatable-component></datatable-component>
                </div>
                 
            </div>
        </div>
    </div>
</div>
@endsection 