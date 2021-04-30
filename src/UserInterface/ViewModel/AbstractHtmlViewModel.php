<?php 

namespace Abbeal\Bundle\UseCaseBundle\UserInterface\ViewModel;

abstract class AbstractHtmlViewModel {
    
    public $httpCode;
    public $notifications = [];
    public $errors = [];

    public function addNotification(string $type, string $message): void
    {
        $this->notifications[] = ['type' => $type, 'message' => $message];
    }
}
