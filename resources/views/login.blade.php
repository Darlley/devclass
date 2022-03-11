@extends('layout')
@section('portal')

    @include('includes/errors')
    @include('includes/sucess')

    <form action="/login/store" method="POST">
        @csrf
        <fieldset class="bg-red">
            <legend>Login</legend>
            <div>
                <label for="email" ></label>
                <input type="email" name="email" value="{{ old('email') }}">
            </div>
            <div>
                <label for="password"></label>
                <input type="password" name="password">
            </div>

            <button type="submit">Entrar</button>
        </fieldset>
    </form>

@endsection