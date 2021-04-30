<?php

/*
 * This file is part of the Abbeal UseCaseBundle package.
 *
 * (c) Stéphane Férey <stephane.ferey@abbeal.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Abbeal\Bundle\UseCaseBundle\Domain\Responders;

use Abbeal\Bundle\UseCaseBundle\Domain\Responders\ResponseInterface;
use Abbeal\Bundle\UseCaseBundle\Domain\Shared\Error\Notification;

/**
 * Class AbstractResponse.
 */
abstract class AbstractResponse implements ResponseInterface
{
    /** @var Notification */
    private $notification;

    public function __construct()
    {
        $this->notification = new Notification();
    }

    public function addError(string $fieldName, string $error)
    {
        $this->notification->addError($fieldName, $error);
    }

    public function getNotification(): Notification
    {
        return $this->notification;
    }
}
