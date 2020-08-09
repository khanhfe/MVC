<div class="card">
	<div class="card-header">
		<svg class="svg-inline--fa" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM224 416H64v-96h160v96zm0-160H64v-96h160v96zm224 160H288v-96h160v96zm0-160H288v-96h160v96z"></path></svg>
		Chi tiết đơn hàng
	</div>
	<div class="card-body">
		<div class="table">
			<div>
				<table width="100%" cellspacing="0" class="dataTable">
					<thead>
						<tr>
							<th>ID Đơn hàng</th>
							<th>Tên sản phẩm</th>
							<th>Hình ảnh</th>
							<th>Giá khuyến mãi (nếu có)</th>
							<th>Giá chính thức</th>
							<th>Màu sắc</th>
							<th>Số lượng</th>
						</tr>
					</thead>
					<tbody>
						<tr><?php $total = 0; foreach ($data['order'] as $order) { $total+=$order['PriceUnit']*$order['Quantity']?>
							<td><?php echo $order['OrderID']; ?></td>
							<td><?php echo $order['Product']; ?></td>
							<td><img src="public/<?php echo $order['Image']; ?>" height="100"></td>
							<td><?php echo number_format($order['PricePromote']) ?>đ</td>
							<td><?php echo number_format($order['PriceUnit']) ?>đ</td>
							<td><?php echo $order['Color'] ?></td>
							<td><?php echo $order['Quantity'] ?></td>
						</tr><?php } ?>
						<tr>
							<td colspan="6" style="text-align: right;"><b>Tổng tiền: </b></td>
							<td><?php echo number_format($total); ?>đ</td>
						</tr>
						<tr>
							<td colspan="6" style="text-align: right;"><b>Giảm: </b></td>
							<td><?php echo "- ".number_format($total-$data['order'][0]['TotalPay']); ?>đ</td>
						</tr>
						<tr>
							<td colspan="6" style="text-align: right;"><b>Cần thanh toán: </b></td>
							<td><b class="text-danger"><?php echo number_format($data['order'][0]['TotalPay']); ?>đ</b></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="info">
			<div>
				<div class="status">
					<div>Trạng thái: <i><?php echo $data['order'][0]['Status']; ?></i></div>
				</div>
				<h2>Thông tin khách hàng:</h2>
				<ul>
					<li><?php echo $data['order'][0]['FullName']; ?> - 0<?php echo $data['order'][0]['PhoneNumber'] ?></li>
					<li>Địa chỉ: <?php echo $data['order'][0]['Address'] ?></li>
					<li>Thời gian đặt hàng: <?php echo $data['order'][0]['TimeOrder'];?></li>
					<li>Thời gian nhận hàng: <?php echo $data['order'][0]['DeliveryTime'];?></li>
					<li>Lý do hủy đơn hàng (nếu có):<?php echo "<i class='text-secondary'>".$data['order'][0]['ReasonCancel']."</i>" ?></li>
					<li>Ghi chú đơn hàng: <?php echo $data['order'][0]['NoteCart']; ?></li>
				</ul>
					
			</div>
		</div>
	</div>
</div>
<style type="text/css" media="screen">
	.info{
	}
</style>