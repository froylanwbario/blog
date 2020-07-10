{{--@extends('adminlte::page')--}}
@extends('layouts.app')



@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container" id="app">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                

                <!--<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>-->

                
                <div id="app" class="content"><!--La equita id debe ser app, como hemos visto en app.js-->
                    <example-component></example-component><!--Añadimos nuestro componente vuejs-->
                </div>
               

            </div>
        </div>
    </div>
</div>
@endsection
