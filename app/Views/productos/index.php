<h2>Listado de Productos</h2>

<table border="1">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Codigo</th>
        <th>Acciones</th>
    </tr>
        <?php foreach($productos as $producto):?>
     <tr>     
        <td> <?=$producto ['id']; ?> </td> 
        <td> <?=$producto ['nombre']; ?> </td> 
        <td> <?=$producto ['precio']; ?> </td> 
        <td> <?=$producto ['stock']; ?> </td> 
        <td> <?=$producto ['codigo']; ?> </td> 
        <td><a href="<?= site_url('productos/detalle/'.$producto['id']); ?>">Ver Detalles</a></td> 
    </tr> 
    
    <?php endforeach;?>

</table>
    
      

