<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include_once '_head.php';
?>

<body>
    <div id="wrapper">

        <?php
        include_once '_topo.php';
        include_once '_menu.php';

        ?>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Alterar Conta</h2>
                        <h5>Aqui você poderá alterar ou excluir suas contas cadastradas. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />

                <div class="form-group">
                    <label>Banco*</label>
                    <input class="form-control" placeholder="Digite o nome do banco..." />
                </div>
                  <div class="form-group">
                    <label>Agência*</label>
                    <input class="form-control" placeholder="Digite o nº da agência..." />
                </div>
                  <div class="form-group">
                    <label>Nº da conta*</label>
                    <input class="form-control" placeholder="Digite o Nº da conta..." />
                </div>
                    <div class="form-group">
                    <label>Saldo*</label>
                    <input class="form-control" placeholder="Digite o saldo da conta..." />
                </div>

                <button type="submit" class="btn btn-success">Salvar</button>
                <button type="submit" class="btn btn-danger">Excluir</button>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>



</body>

</html>