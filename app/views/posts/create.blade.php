@extends('layouts.master')

@section('header')
	@parent
@stop

@section('content')
	{{ Form::open(array('route' => 'posts.store')) }}
		{{ Form::label('title', 'Title')}}
		{{ Form::text('title')}}

		{{ Form::label('body', 'Body')}}
		{{ Form::textarea('body')}}

		{{ Form::submit('Submit')}}
	{{ Form::close()}}
@stop