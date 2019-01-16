
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">"<?php echo $title; ?>"</h2>

						<?php foreach ($produk as $row){ ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="<?php echo base_url().'asset/images/';?>home/product2.jpg" alt="" />
										<h2><?php echo $row->harga_jual; ?></h2>
										<p><?php echo $row->nama_produk; ?></p>
										<a href="<?php echo base_url().'index.php/detail_item/show/'.$row->id_produk;?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									
									<div class="product-overlay">
									<a href="<?php echo base_url().'index.php/detail_item/show/'.$row->id_produk;?>">
										<div class="overlay-content">
											<h2><?php echo $row->harga_jual; ?></h2>
											<p><?php echo $row->nama_produk; ?></p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div></a>
									</div>
									
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						<?php } ?>

						
						
					</div><!--features_items-->
					
					
				</div>
