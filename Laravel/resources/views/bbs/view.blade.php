@extends('layouts.template')

@section('title')
	글 상세보기 
@endsection

@section('content')



	<div class="container">
  		<h2>게시글 상세 정보</h2>
  	</div>	


	<div class="container">
		<table class="table">
			<tr> 
				<th>제목</th>
				<td>{{$menu->title}}</td>
			</tr>	
			<tr> 
				<th>작성자</th>
				<td>{{$menu->writer}}</td>
			</tr>	
			<tr> 
				<th>작성일시</th>
				<td>{{$menu->created_at}}</td>				
			</tr>	
			<tr> 
				<th>내용</th>
				<td>{{$menu->content}}</td>				
			</tr>				
		</table>	

	</div>	
	<div class="container">
		<div class="row">
			<input type="button" class="btn btn-primary" 
				onclick="location.href='bbs?page={{$menu->page}}'" value="목록보기">
			<input type="button" class="btn btn-success" 
				onclick="location.href='modify_form/{{$menu->id}}'" value="수정">
			<a href="{{route('delete',$menu->id)}}">글삭제</a>
		</div>	
	</div>	

@endsection

