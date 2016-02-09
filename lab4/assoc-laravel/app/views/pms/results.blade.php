@extends('layouts.master')

@section('title')
Associative array search results page
@stop

@section('content')

<p>Results for query '{{{ $name }}}','{{{ $address }}}',{{{ $phone }}},'{{{ $email }}}' </p>


@if (count($users) == 0)

<p>No results found.</p>

@else 

<table class="bordered">
<thead>
<tr><th>Name</th><th>Address</th><th>Phone</th><th>Email</th></tr>
</thead>
<tbody>

@foreach($users as $user)
  <tr><td>{{{ $user['name'] }}}</td><td>{{{ $user['address'] }}}</td><td>{{{ $user['phone'] }}}</td><td>{{{ $user['email'] }}}</td></tr>
@endforeach

</tbody>
</table>
@endif

<p><a href="{{ secure_url('/item_list') }}">New search</a></p>
@stop