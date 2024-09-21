<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4"><?php echo $titulo; ?></h4>
            <?php \Config\Services::validation()->listErrors(); ?>
            <form method="POST" action="<?php echo base_url('/productos/actualizar'); ?>" autocapitalize="off">
                <?php csrf_field(); ?>
                <input type="hidden" id="id" name="id" value="<?php echo $producto['id']; ?>">

                <div class="form-group">
                    <div class="row">
                        <div class="col-6 col-ms-6">
                            <label for="codigo">Codigo</label>
                            <input class="form-control" id="codigo" name="codigo" type="text" value="<?php echo $producto['codigo']; ?>" autofocus required>
                        </div>
                        <div class="col-6 col-ms-6">
                            <label for="nombre">Nombre</label>
                            <input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo $producto['nombre']; ?>" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-6 col-ms-6">
                            <label for="id_unidad">Unidad</label>
                            <select name="id_unidad" id="id_unidad" class="form-control" required>
                                <option value="">Seleccionar Unidad</option>
                                <?php foreach ($unidades as $unidad) { ?>
                                    <option value="<?php echo $unidad['id']; ?>" <?php if ($unidad['id'] == $producto['id_unidad']) echo 'selected'; ?>>
                                        <?php echo $unidad['nombre']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-6 col-ms-6">
                            <label for="id_categoria">Categorias</label>
                            <select name="id_categoria" id="id_categoria" class="form-control" required>
                                <option value="">Seleccionar categoria</option>
                                <?php foreach ($categorias as $categoria) { ?>
                                    <option value="<?php echo $categoria['id']; ?>" <?php if ($categoria['id'] == $producto['id_categoria']) echo 'selected'; ?>>
                                        <?php echo $categoria['nombre']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-6 col-ms-6">
                            <label for="precio_venta">Precio venta</label>
                            <input class="form-control" id="precio_venta" name="precio_venta" type="text" value="<?php echo $producto['precio_venta']; ?>" required>
                        </div>
                        <div class="col-6 col-ms-6">
                            <label for="precio_compra">Precio compra</label>
                            <input class="form-control" id="precio_compra" name="precio_compra" type="text" value="<?php echo $producto['precio_compra']; ?>" required>
                        </div>
                    </div>
                </div> 

                <div class="form-group">
                    <div class="row">
                        <div class="col-6 col-ms-6">
                            <label for="stock_minimo">Stock minimo</label>
                            <input class="form-control" id="stock_minimo" name="stock_minimo" type="text" value="<?php echo $producto['stock_minimo']; ?>" required>
                        </div>
                        <div class="col-6 col-ms-6">
                            <label for="inventariable">Es inventariable</label>
                            <select name="inventariable" id="inventariable" class="form-control">
                                <option value="1" <?php if ($producto['inventariable'] == 1) echo 'selected'; ?>>SI</option>
                                <option value="0" <?php if ($producto['inventariable'] == 0) echo 'selected'; ?>>NO</option>
                            </select>
                        </div>
                    </div>
                </div> 
                <br>
                <div>
                    <a href="<?php echo base_url('/productos'); ?>" class="btn btn-primary">Regresar</a>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        
    </main>

