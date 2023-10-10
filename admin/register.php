<?php
	include('../include/navbar.php');
?>
<div class="container mt-4 my-5 lead text-center">
    <h2>작성하기</h2>

    <div>
        <div class="mb-3 row">
            <label class="col-sm-1 col-form-label">작성자</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" value="닉네임">
            </div>
        </div>
    </div>
     
    <div>
        <div class="mb-3">
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="제목을 입력해주세요">
            <label for="exampleFormControlTextarea1" class="form-label"></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="내용을 입력해주세요"></textarea>
        </div>
    </div>
</div>