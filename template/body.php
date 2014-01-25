<div id="nav_holder">
	<div id="logo">
		<span class="logo_b" id="nav_button"><img width="55" height="55" src="style/images/menu.png" alt="Menu" /></span>
		<span class="logo_b" id="cart_button"><img width="55" height="55" src="style/images/cart.png" alt="Cart" /></span>
        <span id="ttrgovina">Tshop</span>
    </div>
	<nav>
			<ul class="first_menu">
				<?php foreach(getCategory(0) as $menu0_item):?>
				<li>
					<a href="#"><?php echo $menu0_item["name"];?></a>
					<?php if(getCategory($menu0_item["ID"])!=FALSE):?>
						<ul class="second_menu">
							<?php foreach(getCategory($menu0_item["ID"]) as $menu1_item):?>
							<li>
								<a href="#"><?php echo $menu1_item["name"];?></a>
								<?php if(getCategory($menu1_item["ID"])!=FALSE):?>
								<ul class="third_menu">
									<span></span>
									<?php foreach(getCategory($menu1_item["ID"]) as $menu2_item):?>
									<li>
										<a href="#"><?php echo $menu2_item["name"];?></a>
									</li>
									<?php endforeach;?>
								</ul>
								<?php endif;?>
							</li>
							<?php endforeach;?>
						</ul>
					<?php endif;?>
				</li>
				<?php endforeach;?>
			</ul>
	</nav>
</div>
<div id="container">
    <div id="title"><h1><?php echo title($page); ?></h1></div>
    <div id="content">
	<!--CONTENT GOES HERE-->
	<?php include("template/test.php");?>
    </div>
    <footer>
        <a href="http://facebook.com/tristan.sneider"> &copy;Tristan</a>
    </footer>
</div>