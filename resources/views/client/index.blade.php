@extends('layouts.app')

@section('content')

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
                
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection