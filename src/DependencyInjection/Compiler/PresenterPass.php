<?php

/*
 * This file is part of the Abbeal UseCaseBundle package.
 *
 * (c) Stéphane Férey <stephane.ferey@abbeal.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Abbeal\Bundle\UseCaseBundle\DependencyInjection\Compiler;

use ReflectionClass;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

//https://symfony.com/doc/current/service_container/autowiring.html
final class PresenterPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $ids = $container->findTaggedServiceIds('presenter.service_arguments');

        foreach (array_keys($ids) as $className) {
            $rf = new ReflectionClass($className);
            foreach ($rf->getInterfaces() as $interface) {
                $container->setAlias($interface->getName().' $'.$rf->getConstant('FORMAT').'Presenter', $className);
            }
        }
    }
}
