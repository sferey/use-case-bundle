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

class Error
{
    public const MIN = 'error.min';
    public const IN_ARRAY = 'error.inArray';
    public const IS_NOT_ARRAY = 'error.isNotArray';
    public const IS_NOT_STRING = 'error.isNotString';
    public const CHOICE = 'error.choice';
    public const NOT_EMPTY = 'error.notEmpty';
    public const NOT_EMPTY_FORM = 'error.notEmptyForm';
    public const UUID = 'error.uuid';
    public const INCORRECT_FORMAT = 'error.incorrectFormat';
    public const INCORRECT_FORMAT_DATE = 'error.incorrectFormatDate';
    public const INCORRECT_FORMAT_TIME = 'error.incorrectFormatTime';
    public const INCORRECT_FORMAT_MAIL = 'error.incorrectFormatMail';

    private $fieldName;
    private $message;

    public function __construct(string $fieldName, string $message)
    {
        $this->fieldName = $fieldName;
        $this->message = $message;
    }

    public function __toString()
    {
        return $this->fieldName.':'.$this->message;
    }

    public function getFieldName(): string
    {
        return $this->fieldName;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
