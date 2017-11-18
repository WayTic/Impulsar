@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form method="GET" action="{{ url('/guardar') }}">
                {{ csrf_field() }}
                <input type="hidden" name="empresa" value="{{ $empresa }}">
                <label>nombre</label>
                <input type="text" name="nombre">
                <label>Correo</label>
                <input type="text" name="correo">
                <button type="submit">enviar</button>
            </form>
        </div>
    </div>
</div>
@endsection
