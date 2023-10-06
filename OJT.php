<?php
class OJT {
	private static DB $_connect;

	public function __construct() {
		self::$_connect = new DB();
	}

	/**
	 * 글 작성 후 저장하는 함수
	 * 
	 * @author YoulAPark
	 * @revision 2023.10.06 NEW
	 * @param string $nickname 작성자닉네임
	 * @param string $title 제목
	 * @param string $content 내용
	 * @return void
	 */
	public function insertOJT(string $nickname, string $title, string $content):void {
		$query = "INSERT INTO comerContent (nickname, title, content) VALUES ('$nickname', '$title', '$content')";
		self::$_connect->executeCUD($query);
	}

	/**
	 * 글을 수정하는 함수
	 * 제목/내용 중 하나 혹은 동시수정이 가능하며, 수정시 수정시간은 현재시간으로 자동기재됩니다.
	 *
	 * @author YoulAPark
	 * @revision 2023.10.06 NEW
	 * @param int $no 게시글번호
	 * @param string $title 제목
	 * @param string $content 내용
	 * @return void
	 */
	public function updateOJT(int $no, string $title, string $content):void {
		if( empty($title) && empty($content) )  { // $title, $empty 비어있을 경우 return
			return;
		}
		$updatedAt = date('Y-m-d H:i:s');
		$array = []; // $value[] 배열 생성
		if (!empty($title)) { // 첫번째 $title이 있을 경우에 배열에 넣음
			$array[] = "title = '$title'";
		}
		if (!empty($content)) { // 두번째 $content가 있을 경우 배열에 넣음
			$array[] = "content = '$content'";
		}
		$array[] = "updatedAt = '$updatedAt'"; // 세번째로 배열에 넣을 것 기본적으로 들어있음
		$value = implode(', ', $updateArray);
		$query = "UPDATE comerContent SET $value WHERE no = $no";
		self::$_connect->executeCUD($query);
	}

	/**
	 * 글을 삭제하는 함수
	 *
	 * @author YoulAPark
	 * @revision 2023.10.06 NEW
	 * @param int $no 게시글번호
	 * @return void
	 */
	public function deleteOJT(int $no):void {
		$query = "DELETE FROM comerContent WHERE no = $no";
		self::$_connect->executeCUD($query);
	}

	/**
	 * 글 전체를 불러오는 함수
	 * 
	 * @author YoulAPark
	 * @revision 2023.10.06 NEW
	 * @return array
	 */
	public function getAllOJT():array {
		$query = "SELECT * FROM comerContent";
		return self::$_connect->select($query);		
	}
	
	/**
	 * 하나의 글만 불러오는 함수
	 * 
	 * @author YoulAPark
	 * @revision 2023.10.06 NEW
	 * @param int $no 게시글번호
	 * @return array
	 */
	public function getOneOJT(int $no):array {
		$query = "SELECT * FROM comerContent WHERE no = $no";
		return self::$_connect->select($query);
	}
}