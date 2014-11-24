@extends('layout.default')

@section('content')
	<p>{{ $user->email or 'default value'}}</p>
@stop

@section('sidebar')
	@parent
	<p><a href="">Link 1</a></p>
	<p><a href="">Link 2</a></p>
	<p><a href="">Link 3</a></p>
@stop