@extends('layout')

@section('portal')
    <form action="/user/store" method="post">
        @csrf

        <input type="text" name="name"  placeholder="Nome">
        <input type="email" name="email" placeholder="E-mail">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" id="" value="Cadastrar">
    </form>
@endsection