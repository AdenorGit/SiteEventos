<?php include VIEW . "Include/inc_admin_head.php" ?>

<?php include VIEW . "Include/inc_admin_navbar.php" ?>

<div class="alert alert-warning d-none" role="alert">
    A simple warning alert—check it out!
</div>

<main class="flex-grow-1 d-flex align-items-center py-5">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-12 mt-1">

                <h1 class="mb-5 text-center"><?= $h1_titulo ?></h1>

                <div style="max-height: 420px; overflow-y: auto;">
                    <table class="table">
                        <thead class="sticky-top table-success">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NOME</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">TIPO</th>
                                <th scope="col">ATIVO</th>
                                <th scope="col">EDITAR</th>
                                <th scope="col">EXCLUIR</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Administrador</td>
                                <td>admin@gmail.com</td>
                                <td>Administrador</td>
                                <td>Ativo</td>
                                <td><button>Editar</button></td>
                                <td><button>Excluir</button></td>
                            </tr>
                             <tr>
                                <th scope="row">2</th>
                                <td>Adenor Sousa</td>
                                <td>adenor@gmail.com</td>
                                <td>Usuário</td>
                                <td>Ativo</td>
                                <td><button>Editar</button></td>
                                <td><button>Excluir</button></td>
                            </tr>
                             <tr>
                                <th scope="row">1</th>
                                <td>João Ferreira</td>
                                <td>joao@gmail.com</td>
                                <td>Usuário</td>
                                <td>Inativo</td>
                                <td><button>Editar</button></td>
                                <td><button>Excluir</button></td>
                            </tr>
                             <tr>
                                <th scope="row">1</th>
                                <td>Administrador</td>
                                <td>admin@gmail.com</td>
                                <td>Administrador</td>
                                <td>Ativo</td>
                                <td><button>Editar</button></td>
                                <td><button>Excluir</button></td>
                            </tr>
                             <tr>
                                <th scope="row">1</th>
                                <td>Administrador</td>
                                <td>admin@gmail.com</td>
                                <td>Administrador</td>
                                <td>Ativo</td>
                                <td><button>Editar</button></td>
                                <td><button>Excluir</button></td>
                            </tr>
                             <tr>
                                <th scope="row">1</th>
                                <td>Administrador</td>
                                <td>admin@gmail.com</td>
                                <td>Administrador</td>
                                <td>Ativo</td>
                                <td><button>Editar</button></td>
                                <td><button>Excluir</button></td>
                            </tr>
                             <tr>
                                <th scope="row">1</th>
                                <td>Administrador</td>
                                <td>admin@gmail.com</td>
                                <td>Administrador</td>
                                <td>Ativo</td>
                                <td><button>Editar</button></td>
                                <td><button>Excluir</button></td>
                            </tr>
                             <tr>
                                <th scope="row">1</th>
                                <td>Administrador</td>
                                <td>admin@gmail.com</td>
                                <td>Administrador</td>
                                <td>Ativo</td>
                                <td><button>Editar</button></td>
                                <td><button>Excluir</button></td>
                            </tr>
                            
                        </tbody>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</main>


<?php include VIEW . "Include/inc_admin_footer.php" ?>