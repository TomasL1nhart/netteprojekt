<?php

declare(strict_types=1);

namespace App\Presentation\Home;
use Nette\Application\UI\Presenter;
final class HomePresenter extends Presenter
{

public function handleGenerateRandomNumber(): void
{
    if ($this->isAjax()) {
        $this->redrawControl('pleaseReload');
    } else {
        $this->redirect('this');
    }
}
}
