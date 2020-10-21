<?php
				header("Content-type:text/html;charset=utf-8");
				session_start();
				$uid = $_SESSION["uid"];
				if (is_null($uid)){
			echo "<script>alert('请先登录!');
			window.location.href='../main/login.php';</script>";
			}
				else{
					include_once("../conn/conn.php");
					$sql=mysqli_query($conn,"delete from gwc where uid='$uid';");
					if(!$sql){
						echo "<script>alert('$uid , $gunId');
						window.location.href='../main/index.php';</script>";
					}else{
						echo "<script>
			window.location.href='../main/index.php';</script>";
					}
				
				}
mysqli_close($conn); 
			?>