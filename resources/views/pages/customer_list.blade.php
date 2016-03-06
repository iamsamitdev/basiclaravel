@extends('layouts.default')

@section('title_page')
รายการข้อมูล Customer @parent
@stop


@section('content')
	@include('includes.menu')

	<div class="jumbotron">
		<div class="container">
			<h1 class="text-center">Customer List ({{$data_count}})</h1>
		</div>
	</div>

	<div class="container">
		{!!$data_customer->render()!!}
		<table class="table table-bordered">
			<thead>
				<tr class="bg-primary">
					<th>Nubmer</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Phone</th>
					<th>City</th>
					<th>PostalCode</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data_customer as $data)
				<tr>
					<td>{{$data->customerNumber}}</td>
					<td>{{$data->contactFirstName}}</td>
					<td>{{$data->contactLastName}}</td>
					<td>{{$data->phone}}</td>
					<td>{{$data->city}}</td>
					<td>{{$data->postalCode}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!!$data_customer->render()!!}
	</div>
@stop