<section class="wrapper cate">
    <div class="container">
        <div class="left">
            <a href="/lich-su-mua-hang/" class="active">Danh sách đơn hàng đã mua</a>  
        </div>
        <div class="right">
            <div class="user" data-customer="1058356574">
                Chào <?php echo $data['info'][0]['Gender'] == 'Nam' ? 'anh' : 'chị'; ?>
                <b><?php echo $data['info'][0]['FullName']; ?></b> - <b><?php echo $data['info'][0]['PhoneNumber']; ?></b>
                <a href="history" class="logout-h">Thoát tài khoản</a>
                <a class="about-s">|</a>
                <a class="feed-back">
                    <img src="public/img/icon/icon-mes.png">
                    Phản hồi, góp ý
                </a>
            </div>
            <div id="overbackgroud"></div>
            <!-- <div class="feed-back-detail">
                <img class="close-p" src="public/img/icon/iconclose.png">
                <h2>Phản hồi, góp ý lịch sử mua hàng</h2>
                <div class="infor-user">
                    <h3>Thông tin khách hàng:</h3>
                    <span><span class="sex-f" data-id="1">Anh:</span> <b class="name-f">Anh Khánh</b> - <b class="phone-f">0389021327</b></span>
                </div>
                <div class="feed-user">
                    <h3>Thông tin phản hồi góp ý:</h3>
                    <textarea id="myTextarea" name="txtFeedback" placeholder="Vui lòng nhập tiếng Việt có dấu..."></textarea>
                    <button type="submit" class="submid-feed" onclick="sendFeedbackContent(13);" disabled="">GỬI</button>
                    <div class="loader"></div>
                </div>
            </div> -->
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
                        <tr class="" data-id="<?php echo $order['OrderID'] ?>">
                            <td>
                                <a href="">#<?php echo $order['OrderID'] ?></a>
                            </td>
                            <td>
                                <a href=""><img src="public/<?php echo $order['Image'] ?>"></a>
                                <div>
                                    <a href=""><?php echo $order['Product']; ?></a>
                                    <div class="link">
                                        <a href="">Xem chi tiết</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <b><?php echo number_format($order['PriceUnit'],0,"",".") ?>₫</b>
                            </td>
                            <td><span><?php echo $order['OrderDate']; ?></span></td>
                            <td>
                                <?php if ($order['Status']==0) {
                                echo '<i class="fail">Đã hủy</i>';
                                }elseif ($order['Status']==1) {
                                    echo '<i>Chờ xác nhận</i>';
                                }else echo '<i>Thanh toán thành công</i>'; ?>
                            </td>
                        </tr> <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>