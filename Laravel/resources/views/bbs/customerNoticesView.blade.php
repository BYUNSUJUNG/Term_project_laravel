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
					<a href="view/{{$customers->id}}">
						{{$customers->title}}						
					</a>		
				</td>
				<td>{{$customers->writer}}</td>
				<td>{{$customers->created_at}}</td>
			</tr>
		@endforeach	

	</table>	
	{{$customer->links()}}

	<div class="customer">
		<img height="350" width="350" src="/img/{{$customerId->file}}"/>
	</div>
	<div> 
		<h1>{{$customerId->title}}</h1>
		{{$customerId->content}}
	</div>
			
	<div class="container">
  		<h2>게시글 상세 정보</h2>
  	</div>	


	<div class="container">
		<table class="table">
			<tr> 
				<th>제목</th>
				<td>{{$customerId->title}}</td>
			</tr>	
			<tr> 
				<th>작성자</th>
				<td>{{$customerId->writer}}</td>
			</tr>	
			<tr> 
				<th>작성일시</th>
				<td>{{$customerId->created_at}}</td>				
			</tr>	
			<tr> 
				<th>내용</th>
				
				<td><img height="350" width="350" src="/img/{{$customerId->file}}"/>{!! $customerId->content !!}</td>				
			</tr>				
		</table>	
	</div>	
	<div class="container">
		<div class="row">
			<a href="{{route('customerNotices')}}">목록보기</a>
			<a href="{{route('customer_modify_form',$customerId->id)}}">글수정</a>
			<a href="{{route('delete',$customerId->id)}}">글삭제</a>
		</div>	
	</div>
    
<!-- jQuery -->
<script src="/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>

@endsection
