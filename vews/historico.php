<?php
   if(!isset($_SESSION['tipo_pagamento'])){
   	   die('Voçe não tem itens no carrinho e não fechou o pedido!');
   }
?>
<h2>Pedido em andamento:</h2>

<p>Tipo de pagamento: <?php echo $_SESSION['tipo_pagamento']; ?></p>
<hr>
<p>Total: <?php echo $_SESSION['total']; ?></p>

<?php

  if($_SESSION['tipo_pagamento'] == 'dinheiro'){
  	echo '<hr>';
  	echo '<p>Troco: '.$_SESSION['valor_troco'].'</p>';
  }
?>

<h2>Itens do seu pedido:</h2>
<div class="container">
	<table width="100%">
		<tr>
			<td>#</td>
			<td>Preço</td>

		</tr>
		<?php
		 $carrinhoItems = deliveryModel::getItensCart();
		 foreach ($carrinhoItems as $key => $value) {
		 $item = deliveryModel::getItem($value);
		 	
		?>
		    <tr>
		    	<td>
		    		<?= $item[2]; ?>
		    		
		    	</td>
		    	<td>
		    		<p>R$<?php echo $item[1]; ?></p>
		    		
		    	</td>
		    </tr>
        <?php
		 }
		?> 
		
	</table>
	<br />
</div>

<br />
<a href="<?php echo INCLUDE_PATH ?>historico?resetar">Pedido Enregue!</a>

<?php
   if(isset($_GET['resetar'])){
   	    session_destroy();
   	    header('location: '.INCLUDE_PATH);

   }
?>