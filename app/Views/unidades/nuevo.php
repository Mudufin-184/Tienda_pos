<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4"><?php echo $titulo; ?></h4>
            <?php \Config\Services::validation()->listErrors();?>
            <form method="POST" action="<?php echo base_url('/unidades/insertar'); ?>" autocapitalize="off">
            <?php csrf_field();?>
                <div class="form-group">
                    <div class="row">
                        <div class="col-6 col-ms-6">
                            <label for="nombre">Nombre</label>
                            <input class="form-control" id="nombre" name="nombre" type="text" autofocus required>
                        </div>
                        <div class="col-6 col-ms-6">
                            <label for="nombre_corto">Nombre corto</label>
                            <input class="form-control" id="nombre_corto" name="nombre_corto" type="text" required>
                        </div>
                    </div>
                </div>
                <br>
                <div>
                    <a href="<?php echo base_url('/unidades'); ?>" class="btn btn-primary">Regresar</a>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </main>
</div>
