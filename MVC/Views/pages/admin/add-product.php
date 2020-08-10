<div class="card">
    <div class="card-body">
        <form action="#" method="post">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <h3 class="text-primary">Thông tin chung về sản phẩm</h3>
                <tr>
                    <th>Tên sản phẩm</th>
                    <td>
                        <input type="text" name="ProductName" value="">
                    </td>               
                </tr>
                <tr>
                    <th>Hình ảnh</th>
                    <td>
                        <input type="file" name="ProductImage" value="" required>
                    </td>               
                </tr>
                <tr>
                    <th>Giá khuyến mãi(Nếu có)</th>
                    <td>
                        <input type="number" name="PricePromo" value="" require>
                    </td>               
                </tr>
                <tr>
                    <th>Giá gốc</th>
                    <td>
                        <input type="number" name="PriceCurrent" value="" require>
                    </td>               
                </tr>
                <tr>
                    <th>Thương hiệu</th>
                    <td>
                        <input type="text" name="Brand" value="" require>
                    </td>               
                </tr>
                <tr>
                    <th>Số lượng tồn kho</th>
                    <td>
                        <input type="number" name="Quantity" value="" require>
                    </td>               
                </tr>
                <tr>
                    <th>Nhóm sản phẩm</th>
                    <td>
                        <input type="text" name="GroupProduct" value="" required>
                    </td>               
                </tr>
                <tr>
                    <th>Thư mục</th>
                    <td>
                        <input type="text" name="folder" value="" required>
                    </td>               
                </tr>
            </table>
            <table class="table table-bordered" width="100%" cellspacing="0">
                <h3 class="text-primary">Thông tin khuyến mãi của sản phẩm</h3>
                <tbody>
                    <tr>
                        <th>Khuyến mãi 1</th>
                        <td>
                            <input type="text" name="Promo1" value="" >
                        </td>               
                    </tr>
                    <tr>
                        <th>Khuyến mãi 2</th>
                        <td>
                            <input type="text" name="Promo2" value="">
                        </td>               
                    </tr>
                    <tr>
                        <th>Khuyến mãi 3</th>
                        <td>
                            <input type="text" name="Promo3" value="">
                        </td>
                    </tr>
                    <tr>
                        <th>Khuyến mãi 4</th>
                        <td>
                            <input type="text" name="Promo4" value="">
                        </td>               
                    </tr>
                    <tr>
                        <th>Khuyến mãi 5</th>
                        <td>
                            <input type="text" name="Promo5" value="">
                        </td>               
                    </tr>
                </tbody>
            </table>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <h2 class="text-primary">Thông số kỹ thuật của sản phẩm</h2>
                <tbody>
                    <tr>
                        <th>Màn hình</th>
                        <td>
                            <input type="text" name="Display" value="">
                        </td>               
                    </tr>
                    <tr>
                        <th>Card (Đối với sản phẩm Laptop)</th>
                        <td>
                            <input type="text" name="Card" value="">
                        </td>               
                    </tr>
                    <tr>
                        <th>Cổng kết nối (Đối với sản phẩm Laptop)</th>
                        <td>
                            <input type="text" name="gateway" value="">
                        </td>               
                    </tr>
                    <tr>
                        <th>Hệ điều hành</th>
                        <td>
                            <input type="text" name="OS" value="">
                        </td>               
                    </tr>
                    <tr>
                        <th>Camera sau</th>
                        <td>
                            <input type="text" name="RearCamera" value="">
                        </td>               
                    </tr>
                    <tr>
                        <th>Camera trước</th>
                        <td>
                            <input  type="text" name="FrontCamera" value="">
                        </td>               
                    </tr>
                    <tr>
                        <th>CPU</th>
                        <td>
                            <input type="text" name="CPU" value="">
                        </td>               
                    </tr>
                    <tr>
                        <th>RAM</th>
                        <td>
                            <input type="text" name="RAM" value="">
                        </td>               
                    </tr>
                    <tr>
                        <th>ROM</th>
                        <td>
                            <input type="text" name="ROM" value="">
                        </td>               
                    </tr>
                    <tr>
                        <th>Kết nối mạng</th>
                        <td>
                            <input type="text" name="network" value="" >
                        </td>               
                    </tr>
                    <tr>
                        <th>Dung lượng pin</th>
                        <td>
                            <input type="text" name="battery" value="" >
                        </td>               
                    </tr>
                    <tr>
                        <th>Thiết kế (Đối với sản phẩm Laptop)</th>
                        <td>
                            <input type="text" name="design" value="">
                        </td>               
                    </tr>
                </tbody>
            </table>
            <div><button class="btn btn-success" type="submit" name="submit" value="Thêm">Thêm</button></div>
        </form>
    </div>
</div>