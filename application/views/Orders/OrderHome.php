﻿    
    
    <!--<div class="card card-outline-primary mb-3">-->
        <!--<div class="card-header card-primary">
            <font color="#FFFFFF">รายการสินค้า</font>
        </div>-->
        <!--<div class="card-block">-->
        	<h4 class="card-title"># รายการสั่งซื้อสินค้า</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th width="5%">
                            <a href="<?php echo site_url('Orders/OrderForm/Add'); ?>" class="btn btn-outline-primary btn-sm">เพิ่ม</a>
                        </th>
                        <th width="20%">เลขที่ใบสั่งซื้อ</th>
                        <th width="15%">วันที่สั่งซื้อ</th>
                        <th width="20%">รหัสลูกค้า</th>
                        <th>ชื่อลูกค้า</th>
                        <th width="7%"></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $i=0;
                    //print_r($results);
                    foreach ( $result as $rs )
                    {
                        $i++;
                ?>
                    <tr>
                        <td class="text-center"><?php echo $i;?></td>
                        <td><?php echo $rs["OrderNumber"];?></td>
                        <td><?php echo chg_date_th($rs["OrderDate"]);?></td>
                        <td><?php echo $rs["CustomerCode"];?></td>
                        <td><?php echo $rs["CustomerName"];?></td>
                        <td>
                            <!-- Example single danger button -->
                            <div class="btn-group">
                              <button type="button" class="btn btn-outline-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo site_url('Orders/OrderForm/Edit/'.$rs["OrderNumber"]); ?>">แก้ไข</a>
                                <a class="dropdown-item" href="<?php echo site_url('Orders/DeleteOrder/Delete/'.$rs["OrderNumber"]); ?>">ลบ</a>
                              </div>
                            </div>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
        <!--</div>-->
    <!--</div>-->
 
 <script>

	$(function(){
		//console.log("xxx");
	
	}) //end $(function()

</script>   
