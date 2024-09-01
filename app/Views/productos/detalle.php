<!DOCTYPE html>
<html>
<head>
    <title>Detalle del Producto</title>
</head>
<body>
<p><strong>ID:</strong> <?= $producto['id']; ?></p>
<p><strong>Nombre:</strong> <?= $producto['nombre']; ?></p>
<p><strong>Precio:</strong> <?= $producto['precio']; ?></p>
<p><strong>Stock:</strong> <?= $producto['stock']; ?></p>
<p><strong>Código:</strong> <?= $producto['codigo']; ?></p>

<a href="<?= site_url('productos'); ?>">Volver al listado</a>





</body>
</html>
