<?php include VIEW . "Include/inc_head.php" ?>

<?php include VIEW . "Include/inc_navbar.php" ?>

<?php include VIEW . "Include/inc_msg.php" ?>

<main class="flex-shrink-0 py-5 mt-5">
    <h1>
        <?php 
            if(isset($_SESSION['usu_nome'])) { 
                echo $_SESSION['usu_nome'];
            }
        ?>
    </h1>

    <div class="container">
        <h1 class="mb-5">Eventos</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-lg-4 g-4">
            
            <?php
                foreach ($eventos as $evento) {
                    echo '
                        <div class="col h-100">
                            <div class="card h-100 shadow">
                                <img src="../../../Public/Assets/Img/'.$evento["eve_img"].'" class="card-img-top" alt="...">
                                <div class="card-body ">
                                    <h5 class="card-title card-titulo">'.mb_strimwidth($evento["eve_titulo"],0, 80, '...').'</h5>
                                    <h6 class="card-title text-primary text-uppercase">'.$evento["usu_nome"].'</h6>
                                    <h6 class="card-title text-muted">'.date('d/m/Y', strtotime($evento["eve_data"])).'</h6>
                                    <h6 class="card-title text-muted text-uppercase">'.$evento["eve_local"].'</h6>
                                    <p class="card-text card-desc">'.mb_strimwidth($evento["eve_desc"],0, 120, '...').'</p>
                                    <a href="#" class="btn btn-primary">Evento</a>
                                </div>
                            </div>
                        </div>
                    ';
                }
            ?>



<!-- 
            <div class="col">
                <div class="card h-100 shadow">
                    <img src="../../../Public/Assets/Img/card.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title 1</h5>
                        <h6 class="card-title text-muted">01/01/2026</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow">
                    <img src="../../../Public/Assets/Img/card.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title 2</h5>
                        <h6 class="card-title text-muted">01/01/2026</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow">
                    <img src="../../../Public/Assets/Img/card.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title 2</h5>
                        <h6 class="card-title text-muted">01/01/2026</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow">
                    <img src="../../../Public/Assets/Img/card.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title 2</h5>
                        <h6 class="card-title text-muted">01/01/2026</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow">
                    <img src="../../../Public/Assets/Img/card.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title 2</h5>
                        <h6 class="card-title text-muted">01/01/2026</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div> -->

        </div>
    </div>

</main>

<?php include VIEW . "Include/inc_footer.php" ?>