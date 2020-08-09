<div class="card">
	<div class="card-header">
		<svg class="svg-inline--fa" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM224 416H64v-96h160v96zm0-160H64v-96h160v96zm224 160H288v-96h160v96zm0-160H288v-96h160v96z"></path></svg>
		Danh sách thông tin khách hàng đã đặt hàng
	</div>
	<div class="card-body">
		<div class="table">
			<div>
				<table width="100%" cellspacing="0" class="dataTable">
					<thead>
						<tr>
							<th>ID</th>
							<th>Họ tên</th>
							<th>Giới tính</th>
							<th>Số điện thoại</th>
							<th>Địa chỉ</th>
							<th>Thời gian đặt hàng</th>
							<th>Thời gian giao hàng</th>
							<th>Trạng thái</th>
							<th>Lý do hủy đơn hàng (nếu có)</th>
							<th>Xem</th>
						</tr>
					</thead>
					<tbody>
						<tr><?php foreach ($data['ListOrder'] as $order) {?>
							<td><?php echo $order['CustomID']; ?></td>
							<td><?php echo $order['FullName']; ?></td>
							<td><?php echo $order['Gender']; ?></td>
							<td>0<?php echo $order['PhoneNumber'] ?></td>
							<td><?php echo $order['Address'] ?></td>
							<td><?php echo $order['TimeOrder'] ?></td>
							<td><?php echo $order['DeliveryTime'] ?></td>
							<td><?php  echo "<i class='btn'>".$order['Status']."</i>";?></td>
							<td><?php echo "<i class='text-secondary'>".$order['ReasonCancel']."</i>" ?></td>
							<td><a href="admin/detailOrder/<?php echo $order['CustomID'] ?>" class="text-primary">Chi tiết đơn hàng</a></td>
						</tr><?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="card">
	<div class="card-header">
		<svg class="svg-inline--fa" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM224 416H64v-96h160v96zm0-160H64v-96h160v96zm224 160H288v-96h160v96zm0-160H288v-96h160v96z"></path></svg>
		Danh sách sản phẩm
	</div>
	<div class="card-body">
		<div class="table">
			<div>
				<a href="admin/add" class="btn btn-success">
					<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
					  <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
					  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
					</svg>Thêm mới sản phẩm
				</a>
			</div>
			<div>
				<table width="100%" cellspacing="0" class="dataTable">
					<thead>
						<tr>
							<th>ID</th>
							<th>Tên sản phẩm</th>
							<th>Hình ảnh</th>
							<th>Giá khuyến mãi (nếu có)</th>
							<th>Giá chính thức</th>
							<th>Thương hiệu</th>
							<th>Tổng số lượng</th>
							<th>Nhóm sản phẩm</th>
							<th>Hành động</th>
						</tr>
					</thead>
					<tbody>
						<tr><?php foreach ($data['ListProduct'] as $product) {?>
							<td><?php echo $product['ProductId']; ?></td>
							<td><?php echo $product['ProductName']; ?></td>
							<td><img src="public/<?php echo $product['ProductImage']; ?>" height="100"></td>
							<td><?php echo number_format($product['PricePromo']); ?>đ</td>
							<td><?php echo number_format($product['PriceCurrent']); ?>đ</td>
							<td><?php echo $product['Brand']; ?></td>
							<td><?php echo $product['Quantity']; ?></td>
							<td><?php echo $product['GroupProduct']; ?></td>
							<td class="tool">
								<a class="text-primary" href="">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
									  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
									</svg>Chỉnh sửa
								</a>
								<a class="text-danger" href="">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
									  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
									  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
									</svg>Xóa
								</a>
							</td>
						</tr><?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>