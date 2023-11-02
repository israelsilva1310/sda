<?php if (isset($count)) : ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Home</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <?php echo $this->Html->link(
            '<i
                class="fas fa-clock fa-sm text-white-50"></i> Horarios Turmas',
            [
                'controller' => 'Schedules',
                'action' => 'index',
                '_full' => true],
            [
                'class' => 'd-none d-sm-inline-block btn btn-sm btn-primary shadow-sm',
                'escape' => false,
            ]
        ) ?>
        <?php echo $this->Html->link(
            '<i
                class="fas fa-user-graduate fa-sm text-white-50"></i> Horarios Professores',
            [
                'controller' => 'Dashboard',
                'action' => 'hoursTeachers',
                '_full' => true],
            [
                'class' => 'd-none d-sm-inline-block btn btn-sm btn-primary shadow-sm',
                'escape' => false,
            ]
        ) ?>
    </div>
    <!-- Main content -->

    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="card text-white bg-info mb-3">
                <div class="card-header">
                    <h3><?php echo $count['teacher'] ?></h3>

                    <p>Professores</p>
                </div>
                <div class="icon">
                    <i class="fa fa-graduation-cap"></i>
                </div>
                <a href="#" class="card-body">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3><?php echo $count['discipline'] ?><sup style="font-size: 20px"></sup></h3>

                    <p>Disciplinas</p>
                </div>
                <div class="icon">
                    <i class="fa fa-id-card"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3><?php echo $count['course'] ?></h3>

                    <p>Turmas</p>
                </div>
                <div class="icon">
                    <i class="fa fa-clipboard-check"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3><?php echo $count['room'] ?></h3>

                    <p>Salas</p>
                </div>
                <div class="icon">
                    <i class="fa fa-window-restore"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>

    <div class="row">
        <h1>Horario de Turma</h1>
        <!--Horaro da turma-->
        <table class="table table-hover table-striped">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Turma</th>
                <th scope="col">Sala</th>
                <th scope="col">Disciplina</th>
                <th scope="col">Professor</th>
                <th scope="col">Horario</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1REDES</th>
                <td>LAB INFO-01</td>
                <td>Comunidação de Dados</td>
                <td>Helder Caldas</td>
                <td>19:00 - 20:40</td>
            </tr>
            <tr>
                <th scope="row">3REDES</th>
                <td>LAB INFO-03</td>
                <td>Programação I</td>
                <td>Mateus Guedes</td>
                <td>19:00 - 20:40</td>
            </tr>
            <tr>
                <th scope="row">5REDES</th>
                <td>LAB INFO-02</td>
                <td>Gerenciamento de Redes</td>
                <td>Thiago Crestani</td>
                <td>19:00 - 20:40</td>
            </tr>
            </tbody>
        </table>
    </div>
    <hr>
<?php endif ?>
