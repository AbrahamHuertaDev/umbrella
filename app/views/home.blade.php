@extends('master')

@section('content')
	<img src="{{Helper::assets('umbrella.png')}}" alt="">
	<h4>Umbrella Framework</h4>
	<p>Desarrollado por <a href="https://github.com/AbrahamHuertaDev" target="_blank">@AbrahamHuerta</a></p>

	<br>
	<p>
		{{Str::after('hola abraham', 'hola')}}
	</p>
@stop