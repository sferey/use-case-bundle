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

interface EntityInterface
{
    /**
     * Get the value of uuid.
     */
    public function getUuid();

    /**
     * Set the value of uuid.
     *
     * @return self
     */
    public function setUuid($uuid): self;
}
