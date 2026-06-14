<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1><a href="index.php"><span><img src="assets/img/orcaicon.png" class="meulogo" alt="OrcaTec"></span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search">
                        <button class="btn btn-success" style="background-color: rgb(26, 204, 141);" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                </li>
                <li><a class="nav-link scrollto active" href="index.php"><i class="bi bi-house-fill"></i>&nbsp;Home</a></li>
                <li><a class="nav-link scrollto" href="#desconto">Desconto</a></li>
                <li><a class="nav-link scrollto" href="#features">Features</a></li>
                <li><a class="nav-link scrollto" href="#gallery">Galleria</a></li>
                <li><a class="nav-link scrollto" href="#team">Team</a></li>

                <li class="dropdown"><a href="#"><span>Mais</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Itens Mais Buscados</a></li>

                </li>
                <li><a href="#">Itens Favoritos</a></li>
                <li><a href="#">Itens em Destaques</a></li>
                <li><a href="#">Itens em Queda de Preço</a></li>
                <li class="dropdown"><a href="#"><span>Mais</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="#"></a></li>
                        <li><a href="#">Lojas Favoritas</a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#">Historico</a></li>
                        <li><a href="#"></a></li>
                    </ul>
            </ul>
            </li>
            <li class="mr-2"><a class="nav-link scrollto" href="#contact" data-bs-toggle="modal" data-bs-target="#myModal2">Login</a></li>
            <li class="ml-3">
                <a class="nav-link scrollto" href="#contact" data-bs-toggle="modal" data-bs-target="#myModal">Cadastro</a>
            </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<!-- Modal cadastro-->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Cadastro</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" id="email" placeholder="Enter nome" name="nome">
                    <label for="nome">Nome</label>
                </div>
                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                    <label pwd="nome">Senha</label>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Sair</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Entrar</button>
            </div>



        </div>
    </div>
</div>
<!-- Modal login-->
<div class="modal" id="myModal2">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Login</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="form-floating mb-3 mt-3">
                    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                    <label for="email">Email</label>
                </div>

                <div class="form-floating mt-3 mb-3">
                    <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                    <label for="pwd">Senha</label>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Entrar</button>
            </div>

        </div>
    </div>
</div>