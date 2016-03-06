@extends('layouts.default')

@section('title_page')
รายการสินค้า Customer @parent
@stop


@section('content')
	@include('includes.menu')

	<div class="jumbotron">
		<div class="container">
			<h1 class="text-center">Product List ({{count($data_product)}})</h1>
		</div>
	</div>

	<div class="container">
		
		<table class="table table-bordered">
			<thead>
				<tr class="bg-primary">
					<th>ลำดับ</th>
					<th>หมวดหมู่</th>
					<th>ชื่อสินค้า</th>
					<th>ราคา</th>
					<th>ผู้ผลิต</th>
					<th>สถานะ</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data_product as $data)
				<tr>
					<td>{{$data->prd_id}}</td>
					<td>{{$data->categoryname}}</td>
					<td>{{$data->prdname}}</td>
					<td>{{$data->price}}</td>
					<td>{{$data->menufacname}}</td>
					<td>{{$data->status}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		
	</div>
@stop