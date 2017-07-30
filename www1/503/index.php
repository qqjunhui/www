<?php
	$zh=$_POST['zh'];
	$mm=$_POST['mm'];
	if($zh=='asdf'){
		if($mm==1234){
			echo '登陆成功';
		}else{
			echo '密码错误';
		}
	}else{
		echo '账号错误';
	}

?>