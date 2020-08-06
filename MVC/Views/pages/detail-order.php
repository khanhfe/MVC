<section class="wrapper cate">
    <div class="container">
        <div class="left">
            <a href="history" class="active">Danh sách đơn hàng đã mua</a>  
        </div>
        <div class="right">
            <div class="user" data-customer="">
                Chào <?php echo $data['order'][0]['Gender'] == 'Nam' ? 'anh' : 'chị'; ?>
                <b><?php echo $data['order'][0]['FullName']; ?></b> - <b>0<?php echo $data['order'][0]['PhoneNumber']; ?></b>
                <a href="history/desSession" class="logout-h">Thoát tài khoản</a>
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
            <div class="detail" id="detail_order">
                <div class="title">
                    <span>Trạng thái: <?php 
                        if ($data['order'][0]['Status']==0) {
                            echo '<i class="fail">Đã hủy</i>';
                        }elseif ($data['order'][0]['Status']==1) {
                            echo '<i>Chờ xác nhận</i>';
                        }else echo '<i>Thanh toán thành công</i>'; ?>
                    </span>
                    <p>Chi tiết đơn hàng #<?php echo $data['order'][0]['CustomID']; ?></p>
                    <small>Mua tại iMobile.com</small>
                </div>
                <?php 
                    $total=0; $saleoff=0; 
                    foreach ($data['order'] as $detail) { 
                        $total += $detail['PriceUnit']*$detail['Quantity'];
                        if($detail['PricePromote']!=0){
                            $saleoff += ($detail['PriceUnit']-$detail['PricePromote'])*$detail['Quantity'];
                        };
                ?>
                <div class="item">
                    <a href="" class="fl"><img src="public/<?php echo $detail['Image'] ?>"></a>
                    <div class="fl" data-apply="">
                        <a href=""><?php echo $detail['Product']; ?></a>
                        <i>Màu: <b><?php echo $detail['Color']; ?></b></i>
                        <i>Số lượng: <b><?php echo $detail['Quantity']; ?></b></i>
                    </div>
                    <div class="fr">
                        <?php if($detail['PricePromote']!=0){ ?>
                            <b><?php echo number_format($detail['PricePromote'],0,"",".") ?>₫</b>
                            <em><?php echo number_format($detail['PriceUnit'],0,"",".") ?>₫</em>
                        <?php } else{ ?>
                            <b><?php echo number_format($detail['PriceUnit'],0,"",".") ?>₫</b>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
                <div class="sum">
                    <span><label>Tổng tiền:</label><i><?php echo number_format($total,0,"","."); ?>₫</i></span>
                    <?php if($saleoff!=0){ ?><span><label>Giảm:</label> <i><?php echo "-".number_format($saleoff,0,"",".")."₫"; ?></i></span><?php } ?>
                    <span><strong>Cần thanh toán:</strong><b><?php echo number_format($data['order'][0]['TotalPay'],0,"","."); ?>₫</b></span>
                </div>
                <div class="info type0">
                    <b>Địa chỉ và thông tin người nhận hàng:</b>
                    <span class="receiver">
                    <?php 
                        echo $data['order'][0]['Gender'] == 'Nam' ? 'Anh ' : 'Chị ';
                        echo $data['order'][0]['FullName']." - 0" . $data['order'][0]['PhoneNumber']; 
                    ?>
                    </span>
                    <span>Địa chỉ nhận hàng: <?php echo $data['order'][0]['Address']; ?></span>
                    <span>Thời gian nhận hàng:</span>
                </div>
                <div class="pay">
                    <?php if($data['order'][0]['Status']==1){?>
                        <a href="javascript:DelOrder(<?php echo $data['order'][0]['CustomID']; ?>)" class="btn-cancel">Hủy đơn hàng</a>
                    <?php } ?>
                    <a href="history" class="back">Quay lại danh sách đơn hàng</a>
                </div>
            </div>
        </div>
        <div class="clr"></div>
    </div>
</section>
<?php require_once 'popup/popup-1.php'; ?>