<?php



/*
 * This file is part of the Abbeal UseCaseBundle package.
 *
 * (c) Stéphane Férey <stephane.ferey@abbeal.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Abbeal\Bundle\UseCaseBundle\UserInterface\Presenter;

use Symfony\Component\HttpFoundation\Request;

abstract class AbstractPresenterStream
{
    const FORMAT = 'turbo_stream';

    final public function supports(Request $request): bool
    {
        return self::FORMAT === $request->getPreferredFormat();
    }
}
