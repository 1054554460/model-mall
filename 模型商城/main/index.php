<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>GUM</title>
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
    <!-- 轮播图部分 -->
    <div class="slider">
        <img src="../img/beijing2.jpg" alt="">
    </div>
    <!-- 中间部分  start -->
    <div class="content">
        <div class="home-module home-menu">
            <a href="#1">
                <img src="../img/xingpin.png" alt="新品" title="新品">
            </a>
            <a href="#2">
                <img src="../img/youhui.png" alt="优惠" title="新品">
            </a>
            <a href="#3">
                <img src="../img/xaindin.png" alt="限定" title="新品">
            </a>
            <a href="#4">
                <img src="../img/huodong.png" alt="活动" title="新品">
            </a>
            <a href="#5">
                <img src="../img/fanchang.png" alt="返场" title="新品">
            </a>
        </div>
        <!-- 新品专区  start-->
        <div class="home-module home-colorful" id="1">
            <h4 class="home-module-title">
                新品
                <span>/</span>
                <span>专区</span>
            </h4>
<!--
            <div class="colorful-top-banner">
                <a href="#" target="_blank">
                    <img src="../img/x1.jpg" alt="">
                </a>
            </div>
-->
            <div class="colorful-product-list">
                <div class="list-box">
					
                    <ul>
						<?php
						  include_once("../conn/conn.php");
						  $result=mysqli_query($conn,"select * from guninfo  ");
						  $sqlstr1 = "select * from guninfo";
	                      $result = mysqli_query($conn,$sqlstr1);//执行查询语句
							while($myrow=mysqli_fetch_row($result) ){
						 ?>
                        <li>
                            <a href="#">
                                <img src="../<?php echo $myrow[1]?>" alt="">
                            </a>
                            <a href="#">
                                <h6> <?php echo $myrow[2]?> </h6>
                            </a>
                            <a href="">
                                <p> 价钱：<?php echo $myrow[3]?></p>
                            </a>
                            <div class="tag-list">
                                <a href=""> <?php echo $myrow[4]?> </a>
                            </div>
                            <div class="cart-info">
                                
                                <a href="../PHP/addgwc.php?gunid=<?php echo $myrow[0]?>" class="add-cart">加入购物车</a>
                            </div>
                        </li>
						
						<?php
							
						  }
						  ?>
                        
                    </ul>
                </div>
            </div>
        </div>
        <!-- 优惠专区  start-->
        <div class="home-module home-colorful" id="2">
            <h4 class="home-module-title">
                优惠
                <span>/</span>
                <span>专区</span>
            </h4>
<!--
            <div class="colorful-top-banner">
                <a href="#" target="_blank">
                    <img src="../img/menu-top-2.jpg" alt="">
                </a>
            </div>
-->
            <div class="colorful-product-list">
                <div class="list-box">
                   <ul>
						<?php
						  include_once("../conn/conn.php");
						  $result=mysqli_query($conn,"select * from guninfo  ");
						  
							while($myrow=mysqli_fetch_row($result) ){
						 ?>
                        <li>
                            <a href="#">
                                <img src="../<?php echo $myrow[1]?>" alt="">
                            </a>
                            <a href="#">
                                <h6> <?php echo $myrow[2]?> </h6>
                            </a>
                            <a href="">
                                <p> 价钱：<?php echo $myrow[3]?></p>
                            </a>
                            <div class="tag-list">
                                <a href=""> <?php echo $myrow[4]?> </a>
                            </div>
                            <div class="cart-info">
                                
                                <a href="../PHP/addgwc.php?gunid=<?php echo $myrow[0]?>" class="add-cart">加入购物车</a>
                            </div>
                        </li>
						
						<?php
							
						  }
						  ?>
                        
                    </ul>
                </div>
            </div>
        </div>
        <!-- 限定专区  start-->
        <div class="home-module home-colorful" id="3">
            <h4 class="home-module-title">
                限定
                <span>/</span>
                <span>专区</span>
            </h4>
<!--
            <div class="colorful-top-banner">
                <a href="#" target="_blank">
                    <img src="../img/menu-top-3.jpg" alt="">
                </a>
            </div>
-->
            <div class="colorful-product-list">
                <div class="list-box">
                    <ul>
						<?php
						  include_once("../conn/conn.php");
						  $result=mysqli_query($conn,"select * from guninfo  ");
						  
							while($myrow=mysqli_fetch_row($result) ){
						 ?>
                        <li>
                            <a href="#">
                                <img src="../<?php echo $myrow[1]?>" alt="">
                            </a>
                            <a href="#">
                                <h6> <?php echo $myrow[2]?> </h6>
                            </a>
                            <a href="">
                                <p> 价钱：<?php echo $myrow[3]?></p>
                            </a>
                            <div class="tag-list">
                                <a href=""> <?php echo $myrow[4]?> </a>
                            </div>
                            <div class="cart-info">
                                
                                <a href="../PHP/addgwc.php?gunid=<?php echo $myrow[0]?>" class="add-cart">加入购物车</a>
                            </div>
                        </li>
						
						<?php
							
						  }
						  ?>
                        
                    </ul>
                </div>
            </div>
        </div>
        <!-- 活动专区  start-->
        <div class="home-module home-colorful" id="4">
            <h4 class="home-module-title">
                活动
                <span>/</span>
                <span>专区</span>
            </h4>
<!--
            <div class="colorful-top-banner">
                <a href="#" target="_blank">
                    <img src="../img/menu-top-4.jpg" alt="">
                </a>
            </div>
-->
            <div class="colorful-product-list">
                <div class="list-box">
                    <ul>
						<?php
						  include_once("../conn/conn.php");
						  $result=mysqli_query($conn,"select * from guninfo  ");
						  
							while($myrow=mysqli_fetch_row($result) ){
						 ?>
                        <li>
                            <a href="#">
                                <img src="../<?php echo $myrow[1]?>" alt="">
                            </a>
                            <a href="#">
                                <h6> <?php echo $myrow[2]?> </h6>
                            </a>
                            <a href="">
                                <p> 价钱：<?php echo $myrow[3]?></p>
                            </a>
                            <div class="tag-list">
                                <a href=""> <?php echo $myrow[4]?> </a>
                            </div>
                            <div class="cart-info">
                                
                                <a href="../PHP/addgwc.php?gunid=<?php echo $myrow[0]?>" class="add-cart">加入购物车</a>
                            </div>
                        </li>
						
						<?php
							
						  }
						  ?>
                        
                    </ul>
                </div>
            </div>
        </div>
	</div>
</body>

</html>