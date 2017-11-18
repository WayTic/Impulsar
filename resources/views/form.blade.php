@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form method="GET" action="{{ url('/guardar') }}">
                <label>nombre</label>
                <input type="text" name="nombre">
                <button type="submit">enviar</button>
            </form>
        </div>
    </div>
</div>
@endsection
