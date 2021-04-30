<?php 

namespace Abbeal\Bundle\UseCaseBundle\UserInterface;

use Abbeal\Bundle\UseCaseBundle\UserInterface\ViewModel\AbstractHtmlViewModel;
use Symfony\Component\Form\FormInterface;

abstract class AbstractView
{
    protected function getDeepFormElement($form, string $fieldName): FormInterface
    {
        $result = explode('.', $fieldName, 2);
        if (($formElement = ($form->has($result[0])) ? $form->get($result[0]) : false) && isset($result[1])) {
            return $this->getDeepFormElement($formElement, $result[1]);
        }

        return $formElement;
    }

    protected function setFlashBag(AbstractHtmlViewModel $viewModel)
    {
        foreach ($viewModel->notifications as $notification) {
            $this->flashBag->add($notification['type'], $notification['message']);
        }
    }
}