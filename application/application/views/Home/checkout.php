</br></br>
<?php
    if($this->cart->contents() ){ 
?> 

<div class="woocommerce">
	<?php echo form_open('order/confirm'); ?>

		<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
			<thead>
				<tr>
					<th class="product-remove">Remove</th>
					<th class="product-remove">image</th>
					<th class="product-thumbnail">Product</th>
					<th class="product-name">price</th>
					<th class="product-price">Quantity</th>
					<th class="product-quantity">Sub Total</th>
				</tr>
			</thead>
			    <tbody>
  
						<?php $i = 1; ?>

						<?php foreach ($this->cart->contents() as $items): ?>

				        <?php echo form_hidden($i.'[rowid]', $items['rowid']); 
				        ?>
			        <tr>
						<td class="product-remove"> <a href="<?php echo base_url(); ?>cart/remove/<?php echo $items['rowid'] ?>" class="remove" aria-label="Remove this item" data-product_id="3345" data-product_sku="">×</a></td>

			            <td class="cart_product">
			                <a href="#"><img class="img-responsive" height="150" width="150" src="<?php echo $items['img'] ?>" alt="Product"></a>
			            </td>

			            <td class="cart_description">
			                <p class="product-name">  <?php echo $items['name']; ?>

			                <small class="cart_ref">Company Page URL: <?php echo $items['url']; ?></small><br>
			                <small>Your Email: : <?php echo $items['email']; ?></small><br>   
			            </td>
			            <td class="price"><span>$<?php echo $this->cart->format_number($items['price']); ?></span></td>

			            <td class="qty">
			                <?php echo $items['qty'] ?>
			            </td>
			            <td class="price">
			                <span>$<?php echo $this->cart->format_number($items['subtotal']); ?></span>

			            </td>
			        </tr>


									<?php $i++; ?>

						<?php endforeach; ?>

				</tbody>
			</table>
						<?php $i = 1; ?>

						<?php foreach ($this->cart->contents() as $items): ?>
						
        <input type="hidden" name="email" value="<?php echo $items['email']; ?>">
        <input type="hidden" name="url" value="<?php echo $items['url']; ?>">
        <input type="hidden" name="name" value="<?php echo $items['name']; ?>">
        <input type="hidden" name="price" value="<?php echo $items['price']; ?>">
        <input type="hidden" name="qty" value="<?php echo $items['qty']; ?>">
        
        <input type="hidden" name="amount" value="<?php echo $this->cart->format_number($this->cart->total()); ?>">
									<?php $i++; ?>

						<?php endforeach; ?>
			<div class="cart-collaterals">
			<div class="cart_totals ">
				<h2>Cart totals</h2>
				<table cellspacing="0" class="shop_table shop_table_responsive">
						<tr class="order-total"><th>Total</th>
							<td data-title="Total"><strong>
								<span class="woocommerce-Price-amount amount">
									<span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo $this->cart->format_number($this->cart->total()); ?></span></strong>
								</td>
							</tr>
						</table>
						<div class="wc-proceed-to-checkout"> 
								<div class="express_checkout_button_cradit_card">
									<input type="image" name="submit" src="<?php echo base_url();?>libs/image/paypal.png" alt="PayPal - The safer, easier way to pay online">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
  
</form>


<?php
    }else{
    ?>
		<div class="main-page">
			<h1 align="center">Your cart is empty. <a href="<?php echo base_url(); ?>all-services" style="display:inline-block;">Start Buying Now</a></h1>
		</div>
<?php
}
?>
	        