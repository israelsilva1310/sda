<h2>Bem vindo <?php echo $user['first_name']; ?> </h2>
<?= $this->Html->link(__('Sair'), ['controller' => 'users' ,'action' => 'logout']) ?>
