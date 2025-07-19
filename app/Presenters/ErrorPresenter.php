<?php

namespace App\Presenters;

use Nette;

final class ErrorPresenter extends Nette\Application\UI\Presenter
{
    public function renderDefault(): void
    {
        $this->template->message = 'Error occurred';
    }
}