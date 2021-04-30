<?php



/*
 * This file is part of the Abbeal UseCaseBundle package.
 *
 * (c) Stéphane Férey <stephane.ferey@abbeal.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Abbeal\Bundle\UseCaseBundle\Domain\UseCase;

use Abbeal\Bundle\UseCaseBundle\Domain\Adapters\ListingGateway;
use Abbeal\Bundle\UseCaseBundle\Domain\Presenter\ListingPresenterInterface;
use Abbeal\Bundle\UseCaseBundle\Domain\Requestors\ListingRequest;
use Abbeal\Bundle\UseCaseBundle\Domain\Responders\ListingResponse;
use Assert\Assertion;
use Assert\AssertionFailedException;

/**
 * Class Listing.
 */
class Listing
{
    private $gateway;

    public function setGateway(ListingGateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function execute(ListingRequest $request, ListingPresenterInterface $presenter)
    {
        $response = new ListingResponse();

        $request->validate();

        $countItems = $this->gateway->countItems($request->getFilters());

        $pages = (int) ceil($countItems / $request->getLimit());

        $page = $request->getPage();

        try {
            Assertion::range($page, 1, $pages);
        } catch (AssertionFailedException $exception) {
            $page = 1;
        }

        $collection = $this->gateway->getItems(
            $page,
            $request->getLimit(),
            $request->getField(),
            $request->getOrder(),
            $request->getFilters()
        );

        $response->setItems($collection->getItems() ?? []);
        $response->setTotalItems($countItems ?? 0);
        $response->setHeaders($request->getHeaders());

        $presenter->present($response);
    }
}
