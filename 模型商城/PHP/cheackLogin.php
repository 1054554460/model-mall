<?php
		header("Content-type:text/html;charset=utf-8");
		session_start();
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		//验证不能为空
		if ($username == '' || $password == '') {
			echo "<script>alert('用户名或密码不能为空!');
			window.location.href='../main/login.php';</script>";
			exit;
		}
		include_once("../conn/conn.php");
		//判断用户名密码能否登录
		$dbusername=null;
		$dbpassword=null;
		$result=mysqli_query($conn,"select * from user where userName='{$username}' ;");
			 while ($row=mysqli_fetch_array($result)) {//while循环将$result中的结果找出来 
			 $dbusername=$row["userName"]; 
			 $dbpassword=$row["userPass"]; 
			 }
			 if (is_null($dbusername)) {
	 	?> 
				<script type="text/javascript"> 
	               alert("用户名不存在"); 
	               window.location.href="../main/login.php";
	            </script> 
		<?php 
			 } else { 
	 		if ($dbpassword!=$password){
		?> 		<script type="text/javascript"> 
				alert("密码错误"); 
				window.location.href="../main/login.php";
				</script> 
	 	<?php
	 		}else {
				if ($dbpassword==$password && $dbusername==$username){
					$_SESSION["uid"]=$dbusername;
		?>		<script type="text/javascript"> 
					window.location.href="../main/index.php";
					
				</script> 
	 	<?php
				}
			}
	 }
	 //关闭数据库连接，如不关闭，下次连接时会出错
	 mysqli_close($conn); 
	 ?> 