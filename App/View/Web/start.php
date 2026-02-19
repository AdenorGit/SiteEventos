<?php include VIEW . "Include/inc_head.php"; ?>

<?php include VIEW . "Include/inc_header.php"; ?>

<main>
   <section>
    <h1>EVENTOS</h1>
    <?= isset($_SESSION['usu_nome']) ? "<h2>USUÁRIO: {$_SESSION['usu_nome']}</h2>" : "" ?>

    <div class="container-card">
       <div class="group-card">

        <?php
            foreach ($eventos as $evento) {
                echo '<article class="card">';
                echo '<img src="../../../Public/Assets/Img/'.$evento['eve_img'].'" alt="Evento">';
                echo '<div class="card-content">';
                echo '<h3>'.mb_strimwidth($evento["eve_titulo"],0, 40, '...').'</h3>';
                echo '<p class="autor">'.$evento['usu_nome'].'</p>';
                echo '<p class="data">'.date('d/m/Y', strtotime($evento["eve_data"])).'</p>';
                echo '<p class="desc">'.mb_strimwidth($evento["eve_desc"],0, 120, '...').'</p>';
                echo '</div>';
                echo '</article>';
            }
        ?>
        
       </div>
    </div>
   </section>
</main>

<?php include VIEW . "Include/inc_footer.php"; ?>