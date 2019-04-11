@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <link rel="stylesheet" type="text/css" href="theme.css" />
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Klienci</div>
                <link rel="stylesheet" type="text/css" href="theme.css" />
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    W bazie jest {{ DB::table('clients')->count() }} klientów.
                    

                    W bazie jest {{ $count }} klientów.
                    {{ $liczba }}

                    <br>
                    <a href="{{ route('clients.index') }}">Pokaż tabelę</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
