<!DOCTYPE html>
<html>
<head>
	<title>Delivery System - Julio</title>
	<link rel="stylesheet" href="<?php INCLUDE_PATH ?>vews/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>
<body>

	<section class="descricao-home">
		<div class="container">
			<h2><i class="fas fa-bullhorn"></i>Faça seu pedido conosco!</h2>
			<a href="<?= INCLUDE_PATH ?>fechar-pedido">Fechar Pedido!</a>
			<div class="clear"></div>
			
		</div><!--container-->
	</section>

	<section class="lista-produto">
		<div class="container">
			<?php
			   $suchis = deliveryModel::listarItens();
			   foreach ($suchis as $key=> $value) {
			   
			   
			?>
			<div class="box-single-food">
				<img src="<?php echo INCLUDE_PATH ?>images/<?= $value['0'] ?>" />
				<p>R$<?= $value['1'] ?></p>
				<a href="<?= INCLUDE_PATH ?>?addCart=<?= $key ?> ">Adicionar ao carrinho</a>
				
			</div>
		   <?php } ?>
			
			<div class="clear"></div>
			
		</div>
		
	</section>


</body>
</html>