<?php
declare(strict_types=1);

namespace App\View;

use Cake\View\View;

class AppView extends View
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading helpers.
     *
     * e.g. `$this->loadHelper('Html');`
     *
     * @return void
     */
    public function initialize(): void
    {
        $this->loadHelper('Html');
        $this->loadHelper('Form');
        $this->loadHelper('Flash');
        $this->loadHelper('Breadcrumbs');
        $this->loadHelper('Number');
        $this->loadHelper('Time');
    }
}
