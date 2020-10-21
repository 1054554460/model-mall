<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>搜索</title>
</head>

<body>

    <!-- 头部导航栏部分  start -->
   <header>
        <div class="inner">
            <div class="logo">
                <img src="../img/tubiao.png" width="120px" height="44px" alt="GUM 模型官网">
            </div>
            <ul class="nav">
                <li><a href="../main/index.php">首页</a></li>
                <li><a href="../main/search.php">模型</a></li>
                
            </ul>
            <ul class="join">
                <li><a href="../main/login.php">登录</a>/<a href="../main/register.html">注册</a></li>
                <li><a href="../PHP/viewgwc.php">购物车</a></li>
            </ul>
        </div>
    </header>

    <div class="class-content-box" style="min-height: 216px;">
        <div class="pro-list-content">
            <div class="pro-list-filter">
            </div>
			
                <form action="search.php" method="post">
            <div>
            	<input type="text" name=gunname placeholder="查找模型" tabindex="1" class="login-button">
            	 <input type="submit"  value="查找" id="search">
            	 <a href="search.php" class="nav">查询所有模型</a>
             </div>
             	</form>
					
            <div class="pro-list-box">
                <ul class="pro-list-pr">
					
                   <?php
						  include_once("../conn/conn.php");	
					$row['gunname'] = !empty($row['gunname'])?$row['gunname']:null;
					@ $gunname = $_POST['gunname'];
					

						  $gunlist=mysqli_query($conn,"select * from guninfo where gunname like  '%$gunname%'");
							while($myrow=mysqli_fetch_row($gunlist)){
						 ?>
					
                        <li>
							<div class="pro-list-su">
                            <a href="#">
                                <img src="../<?php echo $myrow[1]?>" alt="">
                            </a>
                            <a href="#">
                                <h6> <?php echo $myrow[2]?> </h6>
                            </a>
                            <a href="">
                                <p> 价格：<?php echo $myrow[3]?></p>
                            </a>
							
                            
                          
								<a href="../PHP/addgwc.php?gunid=<?php echo $myrow[0]?>" class="add-cart">加入购物车</a>
                                <i></i>
                            </a>
							</div>
                        </li>
						
						<?php
							 
						  }
						  ?>
                </ul>
           		 
			</div>
        </div>
    </div>


</body>

</html>