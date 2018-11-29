@extends('layouts.template')

@section('title')
	게시글 리스트
@endsection

@section('content')
@include('bbs/customerSidebar')


	<table class="table table-hover">
		<tr>
			<th>번호</th>
			<th>제목</th>
			<th>작성자</th>
			<th>작성일시</th>
			<th>조회수</th>
		</tr>	
		@foreach($customer as $customers)
			<tr>
				<td>{{$customers->id}}</td>
				<td>
					<a href="customerNoticesView/{{$customers->id}}">
						{{$customers->title}}						
					</a>		
				</td>
				<td>{{$customers->writer}}</td>
				<td>{{$customers->created_at}}</td>
			</tr>
		@endforeach	

	</table>	
	{{$customer->links()}}
	<a href="{{route('customer_write_form')}}">글작성</a>
