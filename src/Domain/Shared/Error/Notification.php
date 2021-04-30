<?php



/*
 * This file is part of the Abbeal UseCaseBundle package.
 *
 * (c) Stéphane Férey <stephane.ferey@abbeal.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Abbeal\Bundle\UseCaseBundle\Domain\Shared\Error;

class Notification
{
    private $errors = [];

    public function addError(string $fieldName, string $error)
    {
        $this->errors[] = new Error($fieldName, $error);

        return $this;
    }

    /**
     * @return Error[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    public function hasError()
    {
        return \count($this->errors) > 0;
    }
}
