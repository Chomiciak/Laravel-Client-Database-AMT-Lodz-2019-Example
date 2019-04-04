@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
        <a href="/clients/create" class="btn btn-success" style="float: right">Dodaj klienta</a>
    </div>
</div>



<table class="table">
    <thead>
        <tr>
            <th>
                Imię
            </th>
            <th>
                Nazwisko
            </th>
            <th>
                Ulica
            </th>
            <th>
                Numer Domu
            </th>
            <th>
                Miasto
            </th>
            <th>
                Telefon
            </th>
            <th>
                Email
            </th>
            <th>
                
            </th>
        </tr>
    </thead>
    <tbody>
    @foreach($clients as $client)
    <tr>
            <td>
                {{ $client->imie }}
            </td>
            <td>
                {{ $client->nazwisko }}
            </td>
            <td>
                {{ $client->ulica }}
            </td>
            <td>
                {{ $client->numerdomu }}
            </td>
            <td>
                {{ $client->miasto }}
            </td>
            <td>
                {{ $client->telefon }}
            </td>
            <td>
                {{ $client->email }}
            </td>
            <td>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#destroy-{{ $client->id }}">
                <i class="fas fa-trash-alt"></i>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="destroy-{{ $client->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Usunąć Klienta?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Czy na pewno chcesz usunąć klienta o numerze ID=<b>{{ $client->id }}</b>? <br>
                        <span style="color: red"> Ta operacja <u>jest nieodwracalna!</u></span>
                        <br>
                        Dane usuwanego użytkownika: <br>
                        Imię: <b>{{ $client->imie }}</b><br>
                        Nazwisko: <b>{{ $client->nazwisko }}</b>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Anuluj</button>
                        <a type="button" href="/clients/destroy/{{ $client->id }}" class="btn btn-danger">Usuń</a>
                    </div>
                    </div>
                </div>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection