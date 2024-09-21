<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4"><?php echo $titulo; ?></h4>
            <div class="card mb-4">
                <div class="card-header">
                    <div>
                        <p>
                            <a href="<?php echo base_url(); ?>/productos" class="btn btn-warning">Productos</a>
                        </p>
                    </div>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Existencias</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($datos as $dato) { ?> 
                                <tr>
                                    <td><?php echo $dato['id']; ?></td>
                                    <td><?php echo $dato['codigo']; ?></td>
                                    <td><?php echo $dato['nombre']; ?></td>
                                    <td><?php echo $dato['precio_venta']; ?></td>
                                    <td><?php echo $dato['existencias']; ?></td>
                                    <td>
                                        <a href="#" data-href="<?php echo base_url() . '/productos/reingresar/' . $dato['id']; ?>" data-toggle="modal" data-target="#modal-confirma" class="btn btn-primary">
                                            <i class="fa-solid fa-paper-plane"></i>
                                        </a>
                                    </td>                                        
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
               
            
    </main>

    <!-- Modal -->
    <div class="modal fade" id="modal-confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Reingresar registro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>¿Desea reingresar este registro?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">NO</button>
                    <a class="btn btn-danger btn-ok" id="btn-si">SI</a>
                </div>
            </div>
        </div>
    </div>
    
           