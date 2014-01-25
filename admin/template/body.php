<nav>
    <div id="logo">
        <span id="ttrgovina"><img width="200" src="../style/images/TTrgovina_transparent.png" alt="TTrgovina" /></span>
		<span class="logo_b" id="nav_button"><img width="55" height="55" src="../style/images/menu.png" alt="Menu" /></span>
    </div>
	<menu>
		<ul>
			<?php for($i=0;$i<5;$i++): ?>
			
			<?php endfor;?>
			<li><a href="<?php echo $server_addr;?>/admin/index.php?page=domov">Domov</a></li>
			<li><a href="<?php echo $server_addr;?>/admin/index.php?page=uporabniki">Uporabniki</a></li>
			<li><a href="<?php echo $server_addr;?>/admin/index.php?page=artikli">Artikli</a></li>
		</ul>
	</menu>
</nav>
<div id="container">
    <div id="title"><h1><?php echo title($page); ?></h1></div>
    <div id="content">
  <?php if($page=="artikli"){
			include("pages/articles.php");
		}?>
    </div>
    <footer>
        <a href="http://facebook.com/tristan.sneider"> &copy;Tristan</a>
    </footer>
</div>