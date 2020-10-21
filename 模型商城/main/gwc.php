<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>购物车</title>
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
                <dl class="cat-list">
                    <dt>分类：</dt>
                    <dd class="active">全部分类</dd>
                    <dd class="active">HG</dd>
                    <dd class="active">PG</dd>
					<dd class="active">RG</dd>
                    <dd class="active">MG</dd>
                </dl>
            </div>
			<?php
				session_start();
//				$cakeId = $_GET["cakeid"];
				$uid = $_SESSION["uid"];
				if ($uid == " "){
			echo "<script>alert('请先登录!');
			window.location.href='../main/login.php';</script>";
			}
			?>
            <div class="pro-list-box">
                <ul class="pro-list-pr">
					
                   <?php
						  include_once("../conn/conn.php");
						  $result=mysqli_query($conn,"select * from guninfo , gwc WHERE gwc.gunid=guninfo.gunid and uid
						  = $uid");//查询
							while($myrow=mysqli_fetch_array($result)){//返回一个数组
								
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
								
								<a href="">
                                <p> 订单编号：<?php echo $myrow[5]?></p>
                            
                          
								<a href="../PHP/delgwc.php?gwcid=<?php echo $myrow[5]?>" class="pro-list-addcart">
                                <i></i>
                                移除购物车
                            </a>
							</div>
                        </li>
						
						<?php
						  }
						  ?>
                    
                </ul>
           		 <div>
                <a href="../main/pay.php"  style="
            display: block;
                  background: #442818;
                  border-radius: 2px;
                  height: 48px;
                  width: 302px;
                  line-height: 48px;
                  text-align: center;
                  font-size: 18px;
                  color: #fff;
                  border: 0;
                  cursor: pointer; 
            
            position: absolute; left: 50%;
            transform: translateX(-50%);
        

												  ">即刻付款</a>
           		 </div>
			</div>
				
        </div>
    </div>


</body>

</html>