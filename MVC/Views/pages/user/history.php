<section class="wrapper cate">
    <div class="container">
        <div class="left">
            <a href="history" class="active">Danh sách đơn hàng đã mua</a>  
        </div>
        <div class="right">
            <div class="user" data-customer="">
                Chào <?php echo $data['orders'][0]['Gender'] == 'Nam' ? 'anh' : 'chị'; ?>
                <b><?php echo $data['orders'][0]['FullName']; ?></b> - <b>0<?php echo $data['orders'][0]['PhoneNumber']; ?></b>
                <a href="history/desSession" class="logout-h">Thoát tài khoản</a>
                <a class="about-s">|</a>
                <a class="feed-back">
                    <img src="public/img/icon/icon-mes.png">
                    Phản hồi, góp ý
                </a>
            </div>
            <div class="list" id="list_order">    
                <b>Đơn hàng Online đã mua gần đây</b>
                <table cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Sản phẩm</th>
                            <th>Giá</th>
                            <th>Ngày đặt mua</th>
                            <th>Trạng thái</th>
                        </tr>
                        <?php foreach ($data['orders'] as $order) { ?>
                        <tr class="" data-id="<?php echo $order['CustomID'] ?>">
                            <td>
                                <a href="history/detail/<?php echo $order['CustomID'] ?>">#<?php echo $order['CustomID'] ?></a>
                            </td>
                            <td>
                                <a href="history/detail/<?php echo $order['CustomID'] ?>"><img src="public/<?php echo $order['Image'] ?>"></a>
                                <div>
                                    <a href="history/detail/<?php echo $order['CustomID'] ?>">
                                        <?php echo $order['Product']; 
                                            if($order['COUNT(orders.CustomID)']>1){?> và <b><?php echo $order['COUNT(orders.CustomID)']-1; ?> s.phẩm</b> khác <?php } ?> 
                                    </a>
                                    <div class="link">
                                        <a href="history/detail/<?php echo $order['CustomID'] ?>">Xem chi tiết</a>
                                        <?php if($order['Status']=='Đang chờ giao hàng'){ ?>
                                        <a href="javascript:DelOrder(<?php echo $order['CustomID'] ?>)" class="btn-cancel">Hủy đơn hàng</a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <b><?php echo $order['PricePromote']==0?number_format($order['PriceUnit'],0,"","."):number_format($order['PricePromote'],0,"",".") ?>₫</b>
                            </td>
                            <td><span><?php echo $order['OrderDate']; ?></span></td>
                            <td><?php echo '<i>'.$order['Status'].'</i>';?></td>
                        </tr> <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="clr"></div>
    </div>
</section>
<?php require_once 'popup/popup-1.php'; ?>