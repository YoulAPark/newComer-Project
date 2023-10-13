<?php
class JOIN {
	private static DB $_connect;

	public function __construct() {
		self::$_connect = new DB();
	}
	
	/**
	 * 회원가입을 원하는 유저의 회원을 등록합니다.
	 *
	 * @author YoulAPark
	 * @revision 2023.10.13 NEW
	 * @param string $nickname 작성자닉네임
	 * @param string $userName 작성자명
	 * @param string $email 이메일주소
	 * @param string $password 비밀번호
	 */
	public function insertUser(string $nickname, string $userName, string $email, string $password):void {
		$query = "INSERT INTO comerUsers (nickname, userName, email, password) VALUES ('$nickname', '$userName', '$email', '$password')";
		self::$_connect->executeCUD($query);
	}
	
	/**
	 * 본인 정보의 수정하고 싶은 내용을 수정합니다.
	 *
	 * @author YoulAPark
	 * @revision 2023.10.13 NEW
	 * @param int $userNo 유저고유번호
	 * @param string $nickname 작성자닉네임
	 * @param string $userName 작성자명
	 * @param string $email 이메일주소
	 * @param string $password 비밀번호
	 */
	public function updateUser(int $userNo, string $nickname, string $userName, string $email, string $password):void {
		if( empty($nickname) || empty($userName) || empty($email) || empty($password) ) {
			return null;
		}
		$array = [];
		if ( !empty($nickname) ){
			$array[] = "nickname = '$nickname'";
		}
		if ( !empty($userName) ) {
			$array[] = "userName = '$userName'";
		}
		if ( !empty($email) ) {
			$array[] = "email = '$email'";
		}
		if ( !empty($password) ) {
			$array[] = "password = '$password'";
		}
		$value = implode(', ', $updateArray);
		$query = "UPDATE comerUsers SET $value WHERE userNo = $userNo";
		self::$_connect->executeCUD($query);
	}
	
	/**
	 * 회원을 삭제합니다.
	 *
	 * @author YoulAPark
	 * @revision 2023.10.13 NEW
	 * @param int $userNo 유저고유번호
	 */
	public function deleteUser(int $userNo):void {
		$query = "DELETE FROM comerUsers WHERE userNo = $userNo";
		self::$_connect->executeCUD($query);
	}
	
	// 회원정보가져오기
	public function getUser(int $userNo):array {
	}
}