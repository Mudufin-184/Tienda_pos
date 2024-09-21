        <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Codigos de Programacion <?php echo date('Y')?></div>
                        <div>
                            <a href="https://www.facebook.com" target="_blanck">Facebook</a>
                            &middot;
                            <a href="https://codigosdeprogramacion.com/2021/09/02/sistema-de-punto-de-venta-cdp-3/" target="_blanck">Webseite</a>                     
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>/js/scripts.js"></script>
    <script src="<?php echo base_url(); ?>/js/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>/js/datatables-simple-demo.js"></script>
        <!-- jQuery and Bootstrap JS -->
    <script src="<?php echo base_url(); ?>js/jquery-3.5.1.min.js"></script>
    <script src="<?php echo base_url(); ?>js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/js/all.js" ></script>
    <script>
    $('#modal-confirma').on('show.bs.modal', function (e) {
        var button = $(e.relatedTarget); // Button that triggered the modal
        var href = button.data('href'); // Extract info from data-* attributes
        var modal = $(this);
        modal.find('.btn-ok').attr('href', href);
    });
    </script>
</body>
</html>