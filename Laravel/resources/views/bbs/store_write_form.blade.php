
@extends('layouts.template')
@section('content')

<form method="post" action="customer_write">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="form-group">
      <label for="title">제목:</label>
      <input type="text" class="form-control" id="title" name="title"
      required>
    </div>
    <div class="form-group">
      <label for="writer">가맹점:</label>
      <input type="text" class="form-control" id="customer_board" name="customer_board"
      required>
    </div>    
    <div class="form-group">
      <label for="writer">작성자:</label>
      <input type="text" class="form-control" id="writer" name="writer"
      required>
    </div>    
    <div class="form-group"> 
      <label>업로드 파일 선택:</label>
      <input type="file" name="file">
    </div>
    <div class="form-group">
      <label for="content">내용:</label>
      <textarea class="form-control" rows="5" id="content" name="content"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">글등록</button>
    <a class="btn btn-danger" href="bbs">목록보기</a>
</form>

@endsection