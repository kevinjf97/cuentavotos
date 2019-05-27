@extends('layouts.layout')

@section('contenido')
    <div class="container" align="center">
        <form action="#" method="post">
            <div class="form-group">
                <label for="lamas"><b>Carlos Lamas: </b></label>
                <input type="int" name="lamas" id="lamas" class="form-control">
            </div>
            <div class="form-group">
                <label for="roly"><b>Roly Santacroce: </b></label>
                <input type="int" name="roly" id="roly" class="form-control">
            </div>
            <div class="form-group">
                <label for="rimini"><b>Nacho Rímini: </b></label>
                <input type="int" name="rimini" id="rimini" class="form-control">
            </div>
            <div class="form-group">
                    <label for="barreto"><b>León Barreto: </b></label>
                    <input type="int" name="barreto" id="barreto" class="form-control">
                </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Enviar">
            </div>
        </form>
    </div>
@endsection
