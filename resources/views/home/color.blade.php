@extends('shared/layout')

@section('title', 'Color')

@section('content')
    <h2>Color al azar</h2>
    <button id="boton_color" class="boton" type="button">Cambiar color</button>
    <div id="color_container" class="color-container">

    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/script.js') }}"></script>
@endsection
