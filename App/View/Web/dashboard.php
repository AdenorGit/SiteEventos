<?php include VIEW . "Include/inc_head.php" ?>

<?php include VIEW . "Include/inc_navbar.php" ?>

<?php include VIEW . "Include/inc_msg.php" ?>

<main class="flex-grow-1 d-flex align-items-center py-5">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-12 mt-1">

                <h1 class="mb-5 text-center"><?= $h1_titulo ?></h1>

                <div style="max-height: 434px; overflow-y: auto;">
                    <table class="table">
                        <thead class="sticky-top table-success">
                            <tr>
                                <th scope="col" class="w-5">ID</th>
                                <th scope="col" class="w-20">AUTOR</th>
                                <th scope="col">TITULO</th>
                                <th scope="col" class="w-10">DATA</th>
                                <th scope="col" class="w-10">ATIVO</th>
                                <th scope="col" class="w-10">EDITAR</th>
                                <th scope="col" class="w-10">EXCLUIR</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($eventos as $evento) {
                                    echo '
                                        <tr>
                                            <th scope="row">'.$evento["eve_id"].'</th>
                                            <td>'.$evento["usu_nome"].'</td>
                                            <td>'.mb_strimwidth($evento["eve_titulo"],0, 50, '...').'</td>
                                            <td>'.date('d/m/Y', strtotime($evento["eve_data"])).'</td>';
                                            if($evento["eve_ativo"] == 1) {
                                                echo '<td>Ativo</td>';
                                            } else {
                                                echo '<td class="text-danger">Inativo</td>';
                                            }
                                            echo '<td><button type="button" class="btn btn-warning">Editar</button></td>
                                            <td><button type="button" class="btn btn-danger">Excluir</button></td>
                                        </tr>';
                                }
                            ?>
                            
                        </tbody>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</main>



<?php include VIEW . "Include/inc_footer.php" ?>