<div class="card">
    <div class="card-body">
        <form action="/imobile/admin/addColor" method="post" enctype="multipart/form-data">
            <div class="text-success">
                <?php if (isset($data['noti'])) {
                    echo "Thêm mới màu sắc cho sản phẩm thành công";
                };
                if(isset($data['product'])){?>
                Thêm mới thành công, mời bạn thêm tùy chọn màu sắc cho sản phẩm <?php echo $data['product'];}?>
            </div>
            <div class="typing">
                <h3 class="text-primary">Tùy chọn màu sắc của sản phẩm</h3>
                <div>Sản phẩm
                    <div><input type="text" name="product" value="<?php echo isset($data['product'])?$data['product']:''?>"></div>
                </div>
                <div>Màu:
                    <div><input type="text" name="Color" required></div>
                </div>
                <div>Số lượng:
                    <div><input type="number" name="QuantityColor" required></div>
                </div>
                <div>Hình ảnh:
                    <div><input type="file" name="ImageColor" required></div>
                </div>
            </div>
            <div><button class="btn btn-success" type="submit" name="add-color" value="Thêm">Thêm</button></div>
        </form>
        <div>
            <a href="/imobile/admin/" class="btn btn-primary" title="Quay lại Dash board">Quay lại Dash board</a>
        </div>  
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