<?php

/*
 * This file is part of the Abbeal UseCaseBundle package.
 *
 * (c) Stéphane Férey <stephane.ferey@abbeal.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Abbeal\Bundle\UseCaseBundle;

use Abbeal\Bundle\UseCaseBundle\DependencyInjection\Compiler\PresenterPass;
use Symfony\Component\DependencyInjection\Compiler\PassConfig;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class UseCaseBundle extends Bundle
{
    // public function build(ContainerBuilder $container)
    // {
    //     parent::build($container);

    //     $container->addCompilerPass(new PresenterPass);
    // }
}
