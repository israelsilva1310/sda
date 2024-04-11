<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/
?>
<ul>
    <li class="nav-header">Menu</li>
    <li class="nav-item menu-open">
        <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Cadastros
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <?= $this->Html->link(
                    '<i class="fa fa-graduation-cap nav-icon"></i> Professores',
                    [
                        'controller' => 'Teachers',
                        'action' => 'index',
                        '_full' => true,
                    ],
                    [
                        'class' => 'nav-link',
                        'escape' => false,
                    ]
                ) ?>
            </li>
            <li class="nav-item">
                <?= $this->Html->link(
                    '<i class="fa fa-clipboard nav-icon"></i> Disciplinas',
                    [
                        'controller' => 'Disciplines',
                        'action' => 'index',
                        '_full' => true,
                    ],
                    [
                        'class' => 'nav-link',
                        'escape' => false,
                    ]
                ) ?>
            </li>
            <li class="nav-item">
                <?= $this->Html->link(
                    '<i class="fa fa-user-graduate nav-icon"></i> Turmas',
                    [
                        'controller' => 'Turmas',
                        'action' => 'index',
                        '_full' => true,
                    ],
                    [
                        'class' => 'nav-link',
                        'escape' => false,
                    ]
                ) ?>
            </li>
            <li class="nav-item">
                <?= $this->Html->link(
                    '<i class="fa fa-user-graduate nav-icon"></i> Cursos',
                    [
                        'controller' => 'Courses',
                        'action' => 'index',
                        '_full' => true,
                    ],
                    [
                        'class' => 'nav-link',
                        'escape' => false,
                    ]
                ) ?>
            </li>
        </ul>
    </li>

    <li class="nav-header">Configurações</li>
    <li class="nav-item">
        <a class="nav-link" href="<?= $this->Url->build('/shifts') ?>">
            <i class="nav-icon fas fa-clock"></i>
            <p>Turnos</p>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= $this->Url->build('/sectors') ?>">
            <i class="nav-icon fas fa-tags"></i>
            <p>Setores</p>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= $this->Url->build('/periods') ?>">
            <i class="nav-icon fas fa-calendar-check"></i>
            <p>Periodos</p>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= $this->Url->build('/rooms') ?>">
            <i class="nav-icon fas fa-hotel"></i>
            <p>Salas | Labs</p>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= $this->Url->build('/imports') ?>">
            <i class="nav-icon fas fa-th"></i>
            <p>Importar Dados
                <span class="right badge badge-danger">New</span>
            </p>
        </a>
    </li>
</ul>
