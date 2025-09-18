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
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Meus Dados</h2>
                        <h5>Nesta página, você poderá alterar seus dados. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />

                <div class="form-group">
                    <label>Nome:</label>
                    <input class="form-control" placeholder="Digite seu nome..." />
                </div>
                <div class="form-group">
                    <label>E-mail:</label>
                    <input class="form-control" placeholder="Digite seu e-mail..." />
                </div>

                <a href="#" class="btn btn-success">Gravar</a>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

</body>

</html>