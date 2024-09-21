<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4"><?php echo $titulo; ?></h4>
            <form method="POST" action="<?php echo base_url('/unidades/actualizar'); ?>" autocapitalize="off">
                <input type="hidden" name="id" value="<?php echo $datos['id']; ?>">
                <div class="form-group">
                    <div class="row">
                        <div class="col-6 col-ms-6">
                            <label for="nombre">Nombre</label>
                            <input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo $datos['nombre']; ?>" autofocus required>
                        </div>
                        <div class="col-6 col-ms-6">
                            <label for="nombre_corto">Nombre corto</label>
                            <input class="form-control" id="nombre_corto" name="nombre_corto" type="text" value="<?php echo $datos['nombre_corto']; ?>">
                        </div>
                    </div>
                </div>
                <div>
                    <a href="<?php echo base_url('/unidades'); ?>" class="btn btn-primary">Regresar</a>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </main>
</div>
