<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Grupo extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('group');

        $table->addColumn('name', 'string', [
            'default' => null,
            'null' => true,
            'limit' => 50,
        ]);
        $table->addColumn('description', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('rule', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addTimestamps('created', 'modified');

        $table->create();
    }
}
