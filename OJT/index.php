<?php
    require_once '../OJT.php';
    require_once '../DB.php';
	include('../include/navbar.php');

    $OJT = new OJT();
    $content = $OJT->getAllOJT();
?>
<div class="container mt-4 my-5 lead text-center">
    <h2>OJT</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th style="width: 10%">번호</th>                
                <th style="width: 40%">제목</th>
                <th style="width: 20%">작성일자</th>
                <th style="width: 10%">닉네임</th>
                <th style="width: 10%">조회수</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($content as $contents) {?>
            <tr>
            <th scope="row"><?php echo $contents['no'] ?></th>
                <td><?php echo $contents['title'] ?></td>
                <td><?php echo $contents['date'] ?></td>
                <td><?php echo $contents['nickname'] ?></td>
                <td>-</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>