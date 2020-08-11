<div class="card">
    <div class="card-body">
        <div class="text-danger">
            <?php if (isset($data['err'])) {
                echo $data['err'];
            } ?>
        </div>
        <form action="/imobile/admin/add_product" method="post" enctype="multipart/form-data">
            <div class="typing">
                <h3 class="text-primary">Thông tin chung về sản phẩm</h3>
                <div>Tên sản phẩm:
                    <div><input type="text" name="ProductName" value="<?php echo $data['product'][0]['ProductName']?>"></div>
                </div>
                <div>Hình ảnh:
                    <img src="public/<?php echo $data['product'][0]['ProductImage']?>" height="180">
                </div>
                <div>Giá khuyến mãi (nếu có):
                    <div><input type="number" name="PricePromo" value="<?php echo $data['product'][0]['PricePromo']?>"></div>
                </div>
                <div>Giá chính thức:
                    <div><input type="number" name="PriceCurrent" value="<?php echo $data['product'][0]['PriceCurrent']?>"></div>
                </div>
                <div>Thương hiệu:
                    <div><input type="text" name="Brand" value="<?php echo $data['product'][0]['Brand']?>"></div>
                </div>
                <div>Nhóm sản phẩm:
                    <div><input type="text" name="GroupProduct" value="<?php echo $data['product'][0]['GroupProduct']?>"></div>
                </div>
                <div>Danh mục:
                    <div><input type="text" name="Category" value="<?php echo $data['product'][0]['category']?>"></div>
                </div>
            </div>
            <div class="typing">
                <h3 class="text-primary">Thông tin khuyến mãi của sản phẩm</h3>
                <div>Khuyễn mãi 1:
                    <div><input type="text" name="Promo1" value="<?php echo $data['product'][0]['Promo1']?>"></div>
                </div>
                <div>Khuyễn mãi 2:
                    <div><input type="text" name="Promo2" value="<?php echo $data['product'][0]['Promo2']?>"></div>
                </div>
                <div>Khuyễn mãi 3:
                    <div><input type="text" name="Promo3" value="<?php echo $data['product'][0]['Promo3']?>"></div>
                </div>
                <div>Khuyễn mãi 4:
                    <div><input type="text" name="Promo4" value="<?php echo $data['product'][0]['Promo4']?>"></div>
                </div>
                <div>Khuyễn mãi 5:
                    <div><input type="text" name="Promo5" value="<?php echo $data['product'][0]['Promo5']?>"></div>
                </div>
            </div>
            <div class="typing">
                <h3 class="text-primary">Thông số kỹ thuật của sản phẩm</h3>
                <div>Màn hình:
                    <div><input type="text" name="Display" value="<?php echo $data['product'][0]['Display']?>"></div>
                </div>
                <div>Card (Đối với sản phẩm Laptop):
                    <div><input type="text" name="Card" value="<?php echo $data['product'][0]['Card']?>"></div>
                </div>
                <div>Cổng kết nối (Đối với sản phẩm Laptop):
                    <div><input type="text" name="gateway" value="<?php echo $data['product'][0]['gateway']?>"></div>
                </div>
                <div>Hệ điều hành:
                    <div><input type="text" name="OS" value="<?php echo $data['product'][0]['OS']?>"></div>
                </div>
                <div>Camera sau:
                    <div><input type="text" name="RearCamera" value="<?php echo $data['product'][0]['RearCamera']?>"></div>
                </div>
                <div>Camera trước:
                    <div><input type="text" name="FrontCamera" value="<?php echo $data['product'][0]['FrontCamera']?>"></div>
                </div>
                <div>CPU:
                    <div><input type="text" name="CPU" value="<?php echo $data['product'][0]['CPU']?>"></div>
                </div>
                <div>RAM:
                    <div><input type="text" name="RAM" value="<?php echo $data['product'][0]['RAM']?>"></div>
                </div>
                <div>ROM:
                    <div><input type="text" name="ROM" value="<?php echo $data['product'][0]['ROM']?>"></div>
                </div>
                <div>Kết nối mạng:
                    <div><input type="text" name="network" value="<?php echo $data['product'][0]['Network']?>"></div>
                </div>
                <div>Dung lượng pin:
                    <div><input type="text" name="battery" value="<?php echo $data['product'][0]['battery']?>"></div>
                </div>
                <div>Thiết kế (Đối với sản phẩm Laptop):
                    <div><input type="text" name="design" value="<?php echo $data['product'][0]['design']?>"></div>
                </div>
            </div>
            <div class="typing">
                <h3 class="text-primary">Tùy chọn màu sắc của sản phẩm</h3>
                <?php foreach ($data['product'] as $item) {?>
                <div>Màu:
                    <div><input type="text" name="Color" value="<?php echo $item['Color'] ?>"></div>
                </div>
                <div>Số lượng:
                    <div><input type="number" name="QuantityColor" value="<?php echo $item['Quantity'] ?>"></div>
                </div>
                <div>Hình ảnh:
                    <img src="public/<?php echo $item['image_product'] ?>" height="125">
                </div>
                <?php } ?>
            </div>
            <div>
                <button class="btn btn-success" type="submit" name="add-product" value="Thêm">Cập nhật</button>
                <a href="/imobile/admin/" class="btn btn-primary" title="Quay lại Dash board">Quay lại Dash board</a>
            </div>
        </form>
    </div>
</div>
<style type="text/css" media="screen">
    form{
        display: grid;
        grid-template-columns: repeat(3,1fr);
        column-gap: 3rem;
    }
    .typing{align-self: start;
        width:100%;
        line-height: 1.5;
    }h3{
        line-height: 2
    }
    .typing input{
        padding: 0.7rem;
        width: 75%;
        background: #e2f3f9;
        border: 1px solid #7fd4ec;
        border-radius: 0.25rem;
        margin-bottom: 1rem;
    }
</style>    