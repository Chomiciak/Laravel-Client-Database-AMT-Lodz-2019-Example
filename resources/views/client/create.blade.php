@extends('layouts.app')

@section('content')

<div class="container card">
  <div class="card-header">
    Stwórz klienta
  </div>
  <div class="card-body">
    <form action="/clients/store" method="POST">

    @csrf

    <div class="form-group">
        <label for="name">Imię</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Podaj imię">
    </div>
    <div class="form-group">
        <label for="surname">Nazwisko</label>
        <input type="text" class="form-control" name="surname" id="surname" placeholder="Podaj nazwisko">
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Podaj adres e-mail">
    </div>
    <div class="form-group">
        <label for="phone">Telefon</label>
        <input type="phone" class="form-control" name="phone" id="phone"  placeholder="Podaj numer telefonu">
    </div>    
    <div class="form-group">
        <label for="street">Ulica</label>
        <input type="text" class="form-control" name="street" id="street" placeholder="Podaj ulicę">
    </div>
    <div class="form-group">
        <label for="houseno">Numer domu</label>
        <input type="text" class="form-control" name="houseno" id="houseno" placeholder="Podaj numer domu">
    </div>
    <div class="form-group">
        <label for="city">Miasto</label>
        <input type="text" class="form-control" name="city" id="city" placeholder="Podaj miasto">
    </div>
    <div class="form-group">
        <label for="postalcode">Kod pocztowy</label>
        <input type="text" class="form-control" name="postalcode" id="postalcode" placeholder="Podaj kod pocztowy">
    </div>

    <button type="submit" class="btn btn-primary">Dodaj klienta</button>
    </form>
  </div>
</div>

@endsection