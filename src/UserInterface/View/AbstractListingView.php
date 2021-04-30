<?php



/*
 * This file is part of the Abbeal UseCaseBundle package.
 *
 * (c) Stéphane Férey <stephane.ferey@abbeal.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Abbeal\Bundle\UseCaseBundle\UserInterface\View;

use Abbeal\Bundle\UseCaseBundle\Domain\Adapters\ListingGateway;
use Abbeal\Bundle\UseCaseBundle\Domain\Requestors\ListingRequest;
use Abbeal\Bundle\UseCaseBundle\Domain\UseCase\Listing;
use Abbeal\Bundle\UseCaseBundle\UserInterface\Presenter\AbstractPresenterHtml;
use Abbeal\Bundle\UseCaseBundle\UserInterface\Presenter\AbstractPresenterJson;
use Symfony\Component\HttpFoundation\Response;

abstract class AbstractListingView
{
    /** @var Listing */
    private $listing;

    /** @var AbstractPresenterHtml|AbstractPresenterJson */
    protected $presenter;

    /**
     * @var ListingGateway
     */
    public function handle($useCase, $gateway)
    {
        if ($useCase instanceof Listing) {
            $this->listing = $useCase;
        }

        if ($gateway instanceof ListingGateway) {
            $this->listing->setGateway($gateway);
        }
    }

    public function process(ListingRequest $request): void
    {
        $this->listing->execute($request, $this->presenter);
    }

    public function render(): Response
    {
        return $this->presenter->generateView();
    }
}
