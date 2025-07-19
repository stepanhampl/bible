<?php

namespace App\Presenters;

use Nette;

final class HomePresenter extends Nette\Application\UI\Presenter
{
    public function renderDefault(): void
    {
        $this->template->message = 'Hello World!';
    }
}
