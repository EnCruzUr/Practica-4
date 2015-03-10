<?php
$Cantidad1=$_GET['Cant1'];
$Cantidad2=$_GET['Cant2'];
$Cantidad3=$_GET['Cant3'];
$Precio1=$_GET['Pre1'];
$Precio2=$_GET['Pre2'];
$Precio3=$_GET['Pre3'];
$Producto1=$_GET['Prod1'];
$Producto2=$_GET['Prod2'];
$Producto3=$_GET['Prod3'];
$Resultado1=$Cantidad1*$Precio1;
$Resultado2=$Cantidad2*$Precio2;
$Resultado3=$Cantidad3*$Precio3;
$Iva="16%";
$Subtotal=$Resultado3+$Resultado2+$Resultado1;
$Total=$Subtotal*1.16;
?>
<html>
    <body>
    	<table>
    		<tr>
    			<th>Producto</th>
    			<th>Total</th>
    		</tr>
    		<tr>
    			<td><?php echo $Producto1; ?></td>
    			<td><?php echo $Resultado1; ?></td>
    		</tr>
    		<tr>
    			<td><?php echo $Producto2; ?></td>
    			<td><?php echo $Resultado2; ?></td>
    		</tr>
    		<tr>
    			<td><?php echo $Producto3; ?></td>
    			<td><?php echo $Resultado3; ?></td>
    		</tr>
    		<tr>
    			<td>Subtotal</td>
    			<td><?php echo $Subtotal; ?></td>
    		</tr>
    		<tr>
    			<td>IVA</td>
    			<td><?php echo $Iva?></td>
    		</tr>
    		<tr>
    			<td>TOTAL</td>
    			<td><?php echo $Total; ?></td>
    		</tr>
    	</table>
    </body>
</html>