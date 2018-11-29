@extends('layouts.template')

@section('title')
	게시글 리스트
@endsection

@section('content')
@include('bbs/customerSidebar')
	@foreach($customer as $customers)
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="customerSideView/{{$customers->id}}">
        <img height="200" width="200" src="/img/{{$customers->file}}"/>
        
        </a>
    </div>
	@endforeach
	{{$customer->links()}}
		<article>
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
				<td>{{$customerId->content}}</td>				
			</tr>				
		</table>	
	</div>	
	<div class="container">
		<div class="row">
			<a href="{{route('customerNotices')}}">목록보기</a>
			<a href="{{route('modify_form',$customerId->id)}}">글수정</a>
			<a href="{{route('delete',$customerId->id)}}">글삭제</a>
		</div>	
	</div>
    
<!-- jQuery -->
<script src="/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>

@endsection
