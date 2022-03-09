@extends('layout')

@section('portal')
    <form action="/user/store" method="post">
        @csrf
        <input type="text" name="nome" id="" placeholder="Nome">
        <input type="email" name="email" id="" placeholder="Email">
        <input type="password" name="password" id="" placeholder="Senha" >
        <input type="submit" value="Cadastrar">
    </form>
@endsection