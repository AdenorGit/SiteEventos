<header class="navbar">
  <nav class="nav-container">
    <div>
      <a href="/" class="brand">
        <img class="logo-img" src="../../../Public/Assets/Img/logo.png" alt="Logo">
        <span><?= NOME_SITE ?></span>
      </a>
    </div>

    <div>
      <span></span>
      <span></span>
      <span></span>
    </div>

    <div class="nav-menu">
      <ul>
        <?php
          if(!isset($_SESSION['usu_nome'])){
            echo '<li><a href="/login">LOGIN</a></li>';
          }else{
            echo '<li><a href="/dashboard">DSHBOARD</a></li>';
            echo '<li><a href="/logout">LOGOUT</a></li>';
          }
        ?>
      </ul>

      <form action="">
        <label class="txt-claro mr-10 txt-bold" for="">PROCURAR</label>
        <input class="input-search" type="search" name="" id="" placeholder="Pesquisar...">
      </form>
    </div>
  </nav>
</header>