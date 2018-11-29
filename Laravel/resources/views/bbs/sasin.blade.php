@extends('layouts.template')

@section('title')
	게시글 리스트
@endsection

@section('content')

<div class="container">

<div class="row">

    <div class="col-lg-12">
        <h1 class="page-header">Thumbnail Gallery</h1>
    </div>
    @foreach($menu as $menus)
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a class="thumbnail" href="view/{{$menus->id}}">
        <img height="200" width="200" src="img/{{$menus->file}}"/>
        
        </a>
    </div>
    @endforeach	
</div>

    
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
{{$menu->links()}}
</div>
	

<a href="{{route('menu_write_form')}}">글작성</a>
