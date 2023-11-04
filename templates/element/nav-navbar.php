<header class="bg-topo">
    <nav class="navbar navbar-expand-xxl navbar-gray">
        <div class="container">
            <?= $this->Html->image("inconfidentes-hor.png", [
                "alt" => "Inicio",
                'height' => '80',
                'class' => 'align-text-top d-inline-block ms-5',
                'url' => ['controller' => 'Dashboard', 'action' => 'index']
            ]) ?>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarSupportedContent" style="">
                <ul id="menu" class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-md-3 py-md-4 text-light fw-bold titulo-menu text-uppercase"
                           href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cadastros
                        </a>
                        <ul class="dropdown-menu" style="z-index: 10000!important;">

                            <li><a class="dropdown-item subtitulo-menu" href="./professores">Professores</a></li>
                            <li><a class="dropdown-item subtitulo-menu" href="./disciplinas">Disciplinas</a></li>
                            <li><a class="dropdown-item subtitulo-menu" href="./usuarios">Usuarios</a></li>
                            <li><a class="dropdown-item subtitulo-menu" href="./salas">Salas / Laboratorios</a></li>
                            <li><a class="dropdown-item subtitulo-menu" href="./turmas">Turmas</a></li>
                            <li><a class="dropdown-item subtitulo-menu" href="./usuarios">Usuarios</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link px-md-3 py-md-4 text-light fw-bold titulo-menu text-uppercase"
                           href="./horarios">Grade</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-md-3 py-md-4 text-light fw-bold titulo-menu text-uppercase"
                           href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Configuração
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item subtitulo-menu"
                                   href="./ferramentas" target="_parent"> Ferramentas</a></li>
                            <li><a class="dropdown-item subtitulo-menu"
                                   href="/transparencia/9/relatorios-procon-anterior-a-maio2021">Relatórios Procon -
                                    anterior a maio/2021</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-md-3 py-md-4 text-light fw-bold titulo-menu text-uppercase"
                           href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Usuario
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item subtitulo-menu"
                                   href="https://ourofinocm.sgpcloud.net:18079/transparencia/"
                                   target="_blank">Perfil</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-md-3 py-md-4 text-light fw-bold titulo-menu text-uppercase"
                           href="./logout">Sair</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</header>

