<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/
?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SDA Adm <sup>Beta</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= $this->Url->build('/') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
           aria-expanded="true" aria-controls="collapseOne">
            <i class="fas fa-fw fa-university"></i>
            <span>Instituição</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
<!--                <h6 class="collapse-header">Components:</h6>-->
                <a class="collapse-item" href="<?= $this->Url->build('/settings') ?>">Configuração</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
           aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Cadastros</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Componentes:</h6>
                <a class="collapse-item" href="<?= $this->Url->build('/shifts') ?>">Turnos</a>
                <a class="collapse-item" href="<?= $this->Url->build('/teachers') ?>">Professores</a>
                <a class="collapse-item" href="<?= $this->Url->build('/disciplines') ?>">Disciplinas</a>
                <a class="collapse-item" href="<?= $this->Url->build('/courses') ?>">Cursos</a>
                <a class="collapse-item" href="<?= $this->Url->build('/rooms') ?>">Salas</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <!--    <li class="nav-item">-->
    <!--        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"-->
    <!--           aria-expanded="false" aria-controls="collapseUtilities">-->
    <!--            <i class="fas fa-fw fa-wrench"></i>-->
    <!--            <span>Utilities</span>-->
    <!--        </a>-->
    <!--        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"-->
    <!--             data-parent="#accordionSidebar">-->
    <!--            <div class="bg-white py-2 collapse-inner rounded">-->
    <!--                <h6 class="collapse-header">Custom Utilities:</h6>-->
    <!--                <a class="collapse-item" href="utilities-color.html">Colors</a>-->
    <!--                <a class="collapse-item" href="utilities-border.html">Borders</a>-->
    <!--                <a class="collapse-item" href="utilities-animation.html">Animations</a>-->
    <!--                <a class="collapse-item" href="utilities-other.html">Other</a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </li>-->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
