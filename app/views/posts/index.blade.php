@extends('layouts.master')

@section('header')
	@parent
@stop

@section('content')
	<div>
		<h1>All Posts</h1>
		<p>{{ link_to_route('posts.create', 'Add new Post')}}</p>
	</div>
	<table class="table table-striped table-hover table-bordered">
			<thead>
				<tr>
					<th>Title</th>
					
					<th>Body</th>

					<th>Show</th>

					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
			@foreach($posts as $post)
				<tr>
					<td>{{ $post->title }}</td>
					<td>{{ $post->body }}</td>
					<td>{{ link_to_route('posts.show', 'Show' , array($post->id), array('class' => 'btn btn-primary')) }}</td>
					<td>
						{{ Form::open(array('method' => 'DELETE', 'route' => array('posts.destroy', $post->id)))}}

							{{ Form::submit('Delete', array('class' => 'btn btn-danger'))}}

						{{ Form::close()}}
					</td>
				</tr>
			@endforeach
			</tbody>
	</table>

@stop