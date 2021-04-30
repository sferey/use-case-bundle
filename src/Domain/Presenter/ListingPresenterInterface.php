<?php



/*
 * This file is part of the Abbeal UseCaseBundle package.
 *
 * (c) Stéphane Férey <stephane.ferey@abbeal.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Abbeal\Bundle\UseCaseBundle\Domain\Presenter;

use Abbeal\Bundle\UseCaseBundle\Domain\Responders\ListingResponse;

/**
 * Interface ListingPresenterInterface.
 */
interface ListingPresenterInterface
{
    public function present(ListingResponse $response): void;
}
