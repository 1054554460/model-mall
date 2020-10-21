<?php
				header("Content-type:text/html;charset=utf-8");
				session_start();
				$gunId = $_GET["gunid"];
				$gunid = (int)$gunId;
				$uid = $_SESSION["uid"];
				if (is_null($uid)){
			echo "<script>alert('请先登录!');
			window.location.href='../main/login.php';</script>";
			}
				else{			
						echo "<script>
			window.location.href='../main/gwc.php';</script>";
				}
mysqli_close($conn); 
			?>