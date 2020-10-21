<?php
		header("Content-type:text/html;charset=utf-8");
		session_start();
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
        $name = $_REQUEST['name'];
		$repassword = $_REQUEST['rePassword'];
		//验证不能为空
		if ($username == '' || $password == '') {
			echo "<script>alert('用户名或密码不能为空!');
			window.location.href='../main/register.html';</script>";
			exit;
		}
		if (!($password == $repassword)){
			echo "<script>alert('两次输入的密码不相同!');
			window.location.href='../main/register.html';</script>";
			exit;
			
		}
include_once("../conn/conn.php");
		$dbusername=null;
		$cheakName=mysqli_query($conn,"select * from user where userName='$username' ;");
		while ($row=mysqli_fetch_array($cheakName)) {//while循环将$result中的结果找出来 
			 $dbusername=$row["userName"]; 
			 }
		if ($dbusername == $username){
			echo "<script>alert('用户名已被注册');
			window.location.href='../main/register.html';</script>";
		}else{
			
			$sql=mysqli_query($conn,"insert into user (userName,userPass,Name) values('$username','$password','$name');");
			if(!$sql){
				echo "<script>alert('注册失败');
				window.location.href='../main/register.html';</script>";
			}else{
				echo "<script>alert('注册成功');
				window.location.href='../main/login.php';</script>";
			}
		}
		
		//关闭数据库连接，如不关闭，下次连接时会出错 		 
		mysqli_close($conn);
	 ?>