@extends('layouts.template')

@section('title')
	게시글 리스트
@endsection

@section('content')
@include('bbs/menuSidebar')
	@foreach($menu as $menus)
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="menuSideView/{{$menus->id}}">
        <img height="200" width="200" src="/img/{{$menus->file}}"/>
        
        </a>
    </div>
	@endforeach
	{{$menu->links()}}
		<article>
			<div class="menu">
				<img height="350" width="350" src="/img/{{$menuId->file}}"/>
			</div>
			<div> 
				<h1>{{$menuId->title}}</h1>
				{{$menuId->content}}
			</div>
			
	<div class="container">
  		<h2>게시글 상세 정보</h2>
  	</div>	


	<div class="container">
		<table class="table">
			<tr> 
				<th>제목</th>
				<td>{{$menuId->title}}</td>
			</tr>	
			<tr> 
				<th>작성자</th>
				<td>{{$menuId->writer}}</td>
			</tr>	
			<tr> 
				<th>작성일시</th>
				<td>{{$menuId->created_at}}</td>				
			</tr>	
			<tr> 
				<th>내용</th>
				<td>{{$menuId->content}}</td>				
			</tr>				
		</table>	
	</div>	
	<div class="container">
		<div class="row">
			<a href="{{route('menuSide')}}">목록보기</a>
			<a href="{{route('modify_form',$menuId->id)}}">글수정</a>
			<a href="{{route('delete',$menuId->id)}}">글삭제</a>
		</div>	
	</div>
    
<!-- jQuery -->
<script src="/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>

@endsection
