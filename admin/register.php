<?php
	include('../include/navbar.php');
?>

<div class="container mt-4 my-5 lead">
	<h2 style="font-weight: 700">회원가입</h2>
	<div>
		<p style="font-weight: 600">이메일주소<p>
				<input type="email" class="form-control sm row " placeholder="사용하실 이메일주소를 입력해주세요">
	</div>
	<div>
		<p style="font-weight: 600">닉네임<p>
				<input type="text" class="form-control sm row" placeholder="사용하실 닉네임을 입력해주세요">
	</div>
	<div>
		<p style="font-weight: 600">이름<p>
				<input type="text" class="form-control sm row" placeholder="이름을 입력해주세요">
	</div>
	<div>
		<div class="row">
			<div class="col">
				<p style="font-weight: 600">비밀번호</p>
				<input type="password" class="form-control mb-3 row" placeholder="비밀번호를 입력해주세요">
			</div>
			<div class="col">
				<p style="font-weight: 600">비밀번호확인</p>
				<input type="password" class="form-control mb-3 row" placeholder="비밀번호를 다시 한번 입력해주세요">
			</div>
		</div>
	</div>
	<div class="d-grid gap-2 d-md-block">
		<button class="btn btn-primary" type="button">가입하기</button>
		<button class="btn btn-primary" type="button">뒤로가기</button>
	</div>
</div>
