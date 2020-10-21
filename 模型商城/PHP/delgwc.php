<?php
				header("Content-type:text/html;charset=utf-8");
				session_start();
				$gwcId = $_GET["gwcid"];
				$gwcid = (int)$gwcId;
				$uid = $_SESSION["uid"];
				if (is_null($uid)){
			echo "<script>alert('请先登录!');
			window.location.href='../main/login.php';</script>";
			}
				else{
					include_once("../conn/conn.php");
					$sql=mysqli_query($conn,"delete from gwc where uid='$uid'and gwcid ='$gwcid';");
					if(!$sql){
						echo "<script>alert('$uid');
						window.location.href='../main/index.php';</script>";
					}else{
						echo "<script>
						alert('已经移出购物车');
			window.location.href='../main/gwc.php';</script>";
					}
				
				}
mysqli_close($conn); 
			?>