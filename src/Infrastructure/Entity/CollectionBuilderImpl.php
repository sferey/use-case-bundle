<?php

/*
 * This file is part of the Abbeal UseCaseBundle package.
 *
 * (c) Stéphane Férey <stephane.ferey@abbeal.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Abbeal\Bundle\UseCaseBundle\Infrastructure\Entity;

use Abbeal\Bundle\UseCaseBundle\Domain\Entities\CollectionBuilder;

class CollectionBuilderImpl extends CollectionBuilder
{
    /**
     * @return CollectionBuilder
     */
    public function create()
    {
        $this->collection = new CollectionImpl();

        return $this;
    }
}
