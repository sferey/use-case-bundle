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

use Abbeal\Bundle\UseCaseBundle\Domain\Shared\Error\Notification;

interface ResponseInterface
{
    public function addError(string $fieldName, string $error);
    public function getNotification(): Notification;
}
