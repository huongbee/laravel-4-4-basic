@extends('layout') {{-- xác định file sẽ include trang chủ--}}


@section('content2') {{-- tên của yield() ở file layout--}}
	<p>Trang chủ 2</p>
@endsection

@section('content') {{-- tên của yield() ở file layout--}}
	<p>Trang chủ</p>

	@if(1>2)
		đúng
	@else 
		sai
	@endif


	@for($i=0;$i<=10;$i+=2)
		{{$i}}
	@endfor

	<?php

	if(1>2){
	?>
		đúng
	<?php
	}
	else{
	?>
		sai
	<?php
	}

	?>



	@if(empty($arr))
		Mảng rỗng
	@else
		@foreach($arr as $value)
			
			@break($value=='iOS')

			{{$value}}
		@endforeach
	@endif

	{{-- @forelse($arr as $v) 
		{{$v}}
	@empty
		Mảng này rỗng
	@endforelse --}}

@endsection

@section('title')
	Trang chủ
@endsection