<?php

/*
 * This file is part of the Abbeal UseCaseBundle package.
 *
 * (c) Stéphane Férey <stephane.ferey@abbeal.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Abbeal\Bundle\UseCaseBundle\Domain\Entities;

use Ramsey\Uuid\UuidInterface;

abstract class AbstractEntity implements EntityInterface
{
    private UuidInterface $uuid;

    /**
     * Get the value of uuid.
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Set the value of uuid.
     *
     * @return self
     */
    public function setUuid($uuid): self
    {
        $this->uuid = $uuid;

        return $this;
    }
}
