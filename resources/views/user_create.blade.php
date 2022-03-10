@extends('layout')

@section('portal')

@include('includes.errors')

@include('includes.sucess')

    <form action="/user/store" method="post">
        @csrf

        <span>
            <input type="text" name="name"  placeholder="Nome" value="{{ old('name') }}">
            <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}">
            <input type="password" name="password" placeholder="Password">
        </span>

        <input type="submit" id="" value="Cadastrar">
        
    </form>

@endsection