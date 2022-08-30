@extends('auth.layout.index')

@section('css')
@stop

@section('content')

    <div class="logo">
        <img src="../assets/images/logo-fold.png">
    </div>

    <div class="form-wrap row">

        <div class="title">
            <strong>Log-in</strong>
        </div>

        <div class="group mb-15 col-100">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">
        </div>

        <div class="group mb-30 col-100">
            <label for="password">Senha</label>
            <input type="password" password="password" id="password">
        </div>

        <div class="col-50 v-align-middle mb-15">
            <a href="./forgot-password.html" class="text-dark-gray">Recuperar senha</a>
        </div>

        <div class="col-50 v-align-middle mb-15 text-right">
            <a href="./register.html" class="text-dark-gray">Criar conta</a>
        </div>

        <div class="col-100">
            <button type="button" class="btn btn-blue btn-block">ENTRAR</button>
        </div>

    </div>

@stop

@section('js')
@stop
