@extends('layouts.template')

@section('title')
	게시글 리스트
@endsection

@section('content')
@include('bbs/storeSidebar')


<div class="col-lg-12">
    <h1 class="page-header">가맹점 갤러리</h1>
</div>
@foreach($store as $stores)
<div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <a class="thumbnail" href="view/{{$stores->id}}">
    <img height="200" width="200" src="img/{{$stores->file}}"/>
    
    </a>
</div>
@endforeach	
</div>


<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
{{$store->links()}}
</div>

<a href="{{route('store_write_form')}}">글작성</a>
@stop