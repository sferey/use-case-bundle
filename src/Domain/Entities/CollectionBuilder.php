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

abstract class CollectionBuilder
{
    /**
     * @var Collection
     */
    protected $collection;

    /**
     * @return CollectionBuilder
     * @codeCoverageIgnore
     */
    abstract public function create();

    /**
     * @return CollectionBuilder
     */
    public function withItems(array $items)
    {
        $this->collection->setItems($items);

        return $this;
    }

    /**
     * @return CollectionBuilder
     */
    public function withField($field)
    {
        $this->collection->setField($field);

        return $this;
    }

    /**
     * @return CollectionBuilder
     */
    public function withHeaders($headers)
    {
        $this->collection->setHeaders($headers);

        return $this;
    }

    /**
     * @return CollectionBuilder
     */
    public function withFilters($filters)
    {
        $this->collection->setFilters($filters);

        return $this;
    }

    /**
     * @return Collection
     */
    public function build()
    {
        return $this->collection;
    }
}
