<?php
/**
 * Author: Israel C A Silva
 * git: https://github.com/israelsilva1310
 * HomePage: https://israelcasilva.com.br
 **/
echo $this->Form->create(null);

echo $this->Form->input('Curso', [
    'type' => 'select',
    'options' => $courses,
    'id' => 'courses',
    'empty' => 'Curso',
]);
echo $this->Form->input('Periodo', [
    'type' => 'select',
    'options' => $periods,
    'id' => 'periods',
    'empty' => 'Periodo',
]);
echo $this->Form->input('Professor', [
    'type' => 'select',
    'options' => $teachers,
    'id' => 'teachers',
    'empty' => 'Professor',
]);
echo $this->Form->input('Disciplina', [
    'type' => 'select',
    'name' => 'disciplines',
    'id' => 'disciplines',
    'options' => $disciplines,
    'empty' => 'Disciplina',
]);

echo $this->Form->input('Dia', [
    'type' => 'select',
    'name' => 'day',
    'id' => 'day',
    'options' => $weekGrid['day'],
]);
echo $this->Form->input('hours', [
    'type' => 'select',
    'name' => 'day',
    'id' => 'day',
    'options' => $weekGrid['hours'],
]);

echo $this->Form->button('Adicionar', ['class' => 'btn btn-primary btn-sm']);

echo $this->Form->end();
?>


<table class="table table-bordered table-hover">
    <thead>
    <tr class="card-primary">
        <th>Segunda</th>
        <th>Terça</th>
        <th>Quarta</th>
        <th>Quinta</th>
        <th>Sexta</th>
    </tr>
    </thead>
    <tbody>

    </tbody>
</table>

