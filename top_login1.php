<?php
    if(!$_SESSION['userid'])
	{
?>
    <a href="./signin.php">로그인</a> |
    <a href="./mem_form.php">가입하기</a>

<?php
	}
	else
	{
       $id = $_SESSION['userid'];
?>
    <?php echo("$id");?>|
    <a href="./logout.php">로그아웃</a> |
    <a href="./mem_modify.php">정보수정</a> |    
    <a href="./quit.php">회원탈퇴</a>

<?php
	}
?>