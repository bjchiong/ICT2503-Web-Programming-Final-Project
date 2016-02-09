@extends('layouts.master')

@section('title')
Associative array search results page
@stop

@section('content')

<p>Results for query '{{{ $name }}}', '{{{ $start }}} '{{{ $state }}}' </p>


@if (count($users) == 0)

<p>No results found.</p>

@else 

<table class="bordered">
<thead>
<tr><th>Name</th><th>Year</th><th>State</th></tr>
</thead>
<tbody>

@foreach($users as $user)
  <tr><td>{{{ $user->name }}}</td><td>{{{ $user->start }}}</td><td>{{{ $user->state }}}</td></tr>
@endforeach

</tbody>
</table>
@endif

<p><a href="{{ secure_url('/') }}">New search</a></p>
@stop