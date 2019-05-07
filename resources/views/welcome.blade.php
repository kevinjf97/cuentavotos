@extends('layouts.layout')

@section('contenido')
    <h1>CuentaVotos</h1>
    <form action="#" method="post">
        <div class="form-group">
            <label for="usuario"><b>Usuario: </b></label>
            <input type="text" name="usuario" id="usuario" class="form-control">
        </div>
        <div class="form-group">
            <label for="password"><b>Clave: </b></label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group">
            <input type="button" class="btn btn-primary" value="Ingresar">
        </div>
    </form>
@endsection
