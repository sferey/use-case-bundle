<?php



/*
 * This file is part of the Abbeal UseCaseBundle package.
 *
 * (c) Stéphane Férey <stephane.ferey@abbeal.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Abbeal\Bundle\UseCaseBundle\Domain\Requestors;

use Abbeal\Bundle\UseCaseBundle\Domain\Shared\Error\Error;
use Assert\Assert;

/**
 * Class ListingRequest.
 */
class ListingRequest implements RequestInterface
{
    private $page;
    private $limit;
    private $field;
    private $order;
    private $filters;
    private $headers;

    /**
     * @throws \Assert\AssertionFailedException
     */
    public function validate(): void
    {
        Assert::lazy()
            ->that($this->page, 'page')->min(1, Error::MIN)
            ->that($this->limit, 'limit')->inArray([10, 25, 50, 100], Error::IN_ARRAY)
            ->that($this->field, 'field')->string(Error::IS_NOT_STRING)
            ->that($this->order, 'order')->inArray(['asc', 'desc'], Error::IN_ARRAY)
            ->that($this->filters, 'filters')->isArray(Error::IS_NOT_ARRAY)
            ->that($this->headers, 'headers')->isArray(Error::IS_NOT_ARRAY)
            ->verifyNow();
    }

    public static function create(int $page, int $limit, string $field, string $order, array $filters, array $headers): self
    {
        return new self($page, $limit, $field, $order, $filters, $headers);
    }

    public function __construct(int $page, int $limit, string $field, string $order, array $filters, array $headers)
    {
        $this->page = $page;
        $this->limit = $limit;
        $this->field = $field;
        $this->order = $order;
        $this->filters = $filters;
        $this->headers = $headers;
    }

    public function getPage(): int
    {
        return $this->page;
    }

    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getField(): string
    {
        return $this->field;
    }

    public function getOrder(): string
    {
        return $this->order;
    }

    public function getFilters(): array
    {
        return $this->filters;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }
}
