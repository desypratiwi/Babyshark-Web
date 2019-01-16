
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php
						$total = 0;
						foreach($cart as $row){

						$subtotal = $row->subtotal; 
						$total = $total + $subtotal; ?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/one.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $row->nama_produk; ?></a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p><?php echo $row->harga_jual; ?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href="<?php echo base_url().'index.php/c_cart/add/'.$row->id_barang; ?>"> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $row->jumlah; ?>" autocomplete="off" size="2">
									<a class="cart_quantity_down" href="<?php echo base_url().'index.php/c_cart/sub/'.$row->id_barang; ?>"> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo $subtotal; ?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="<?php echo base_url().'index.php/c_cart/del/'.$row->id_barang; ?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>

						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_info">
							
								<label>Kurir:</label>
								<select id='kurir'>
								<?php foreach($kurir as $row){ ?>
									<option value='<?php echo $row->harga; ?>'><?php echo $row->nama_perusahaan."- Rp.".$row->harga; ?></option>
								<?php } ?>
								</select>
								
							
							
						</ul>
						<script type="text/javascript">
							function hitung() {
								document.getElementById('kurirtext').innerHTML= document.getElementById("kurir").value;
								var carttotal = parseInt(document.getElementById("carttotal").innerHTML,10);
								var kurir = parseInt(document.getElementById("kurirtext").innerHTML,10);
								document.getElementById('total').innerHTML = carttotal + kurir;
								document.getElementById('totalALL').value = carttotal + kurir;
							}

						</script>
						<button class="btn btn-default check_out" onclick="hitung()">Hitung</button>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span id='carttotal'><?php echo $total; ?></span></li>
							<li>Shipping Cost <span id='kurirtext'>0</span></li>
							<li>Total <span id='total'><?php echo $total; ?></span></li>
						</ul>
							<input type='hidden' name='totalALL' value='<?php echo $total; ?>'>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
