<?php 


namespace App\Http\Controllers;
use \PDO;

	class MemberDao {
		
		private $db;
		
		public function __construct() {
			
			try {
				$this->db = new PDO("mysql:host=localhost;dbname=php", "root", "8498"); // PDO객체 생성 /"URL"를 입력하면 연결되는거임
				// $db 는 여기서만 사용할 것이기에 private
			
				$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch(PDOException $e) {
				exit($e->getMessage());
			}
		}
		function getMember($id){
            try{
                $pstmt = $this->db->prepare("select * from member where id=:id");
                $pstmt->bindValue(":id", $id, PDO::PARAM_STR);
                $pstmt->execute();
                $result=$pstmt->fetch(PDO::FETCH_ASSOC);
            }catch(Exception $e){
                exit($e->getMessage());
            }
			return $result;
        }
		
		function getMember_pw($pw){
            try{
                $pstmt =$this->db->prepare("select * from member where pw=:pw");
                $pstmt->bindValue(":pw", $pw, PDO::PARAM_STR);
                $pstmt->execute();
                $result=$pstmt->fetch(PDO::FETCH_ASSOC);
            }catch(Exception $e){
                exit($e->getMessage());
            }
            return $result;
        }
		
		function insertMember($id, $pw, $name) {
			try {
				$sql = "insert into member(id,pw,name) values(:id,:pw,:name)";
				$pstmt = $this->db->prepare($sql);
				
				$pstmt->bindValue(":id",$id,PDO::PARAM_STR);
				$pstmt->bindValue(":pw",$pw,PDO::PARAM_STR);
				$pstmt->bindValue(":name",$name,PDO::PARAM_STR);
				
				$pstmt->execute();
				
			} catch(PDOException $e) {
				exit($e->getMessage());
			}
		}
		
		function updateMember($id, $pw, $name) {
			try {
				$sql = "update member set pw=:pw, name=:name where id=:id";
				$pstmt = $this->db->prepare($sql);
				
				$pstmt->bindValue(":id",$id,PDO::PARAM_STR);
				$pstmt->bindValue(":pw",$pw,PDO::PARAM_STR);
				$pstmt->bindValue(":name",$name,PDO::PARAM_STR);
				
				$pstmt->execute();
				
			} catch(PDOException $e) {
				exit($e->getMessage());
			}
		}
	}
?>