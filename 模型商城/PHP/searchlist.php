<!--
<?php
						  include_once("../conn/conn.php");
							$gunname = $_POST['gunname'];
						  $gunlist=mysqli_query($conn,"select * from guninfo , gwc WHERE gwc.gunid=guninfo.gunid and uid = $uid");
							while($myrow=mysqli_fetch_row($gunlist)){
						 ?>
					
                        <li>
							<div class="pro-list-su">
                            <a href="#">
                                <img src="../<? echo $myrow[1]?>" alt="">
                            </a>
                            <a href="#">
                                <h6> <? echo $myrow[2]?> </h6>
                            </a>
                            <a href="">
                                <p> 价格：<? echo $myrow[3]?></p>
                            </a>
								
								<a href="">
                                <p> 订单编号：<? echo $myrow[5]?></p>
                            
                          
								<a href="../PHP/delgwc.php?gwcid=<? echo $myrow[5]?>" class="pro-list-addcart">
                                <i></i>
                                移除购物车
                            </a>
							</div>
                        </li>
						
						<?php
						  }
						  ?>-->
