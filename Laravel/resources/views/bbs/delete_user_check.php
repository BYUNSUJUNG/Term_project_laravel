<?php //1701140_변수정 ?>
<?php
	require_once("tools.php"); // java inport와 유사함, require_once를 하면 한번만 읽어옴
    session_start(); // 세션 시작

    $name = isset($_SESSION["name"])?$_SESSION["name"]:"";
    $writer = requestValues("writer");

    if(!$name) { // $name 값이 없을 때
        errorBack("로그인부터 하시오"); 
        /* 
            tools.php의 함수, 메세지 창을 띄우고 전 페이지로 이동함
            alert('<?= $msg ?>'); // 창 띄움
            history.back(); 
        */
    }  else { // $name 값이 있을 때
        if($name!=$writer) // id가 writer와 다를 때
            errorBack("권한이 없습니다.");
    }
    //  클라이언트가 송신한 num값을 읽는다.
    $num = requestValues("num");
?>
<script> 
    function delReq() {  // 삭제 요청
        var yn = confirm("삭제하시겠습니까?"); // 삭제 전 확인
        if(yn== false) return;

		location.href="delete.php?num="+'<?=$num?>';
    }
    delReq();
</script>

