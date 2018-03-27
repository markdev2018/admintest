@extends('layout.app')


@section('content')
<table class="table">
<thead>
<tr>
	<th>ID</th>
	<th>Name</th>
</tr>
</thead>
<tbody>
@foreach($customers as $customer)
<tr>
	<td>{{$customer->id}}</td>
	<td><a href>{{$customer->name}}</a></td>
</tr>
@endforeach
</tbody>
</table>





















<meta name="_token" content="{{ csrf_token() }}"/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
@endsection