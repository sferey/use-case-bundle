<?php



/*
 * This file is part of the Abbeal UseCaseBundle package.
 *
 * (c) Stéphane Férey <stephane.ferey@abbeal.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Abbeal\Bundle\UseCaseBundle\Domain\Adapters;

use Abbeal\Bundle\UseCaseBundle\Domain\Entities\Collection;

interface ListingGateway
{
    /**
     * Recuperation de toutes les items respectant les parametres.
     *
     * @param int    $page    Page selectionné parmis le nombre de resultat
     * @param int    $limit   Limite du nombre de resultat
     * @param string $field   Tri sur le champs
     * @param string $order   Tri sur ordre descendant ou ascendant
     * @param array  $filters Filtre sur des éléments couple [field => value]
     *
     * @return stdClass[]
     */
    public function getItems(int $page, int $limit, string $field, string $order, array $filters): Collection;

    /**
     * Retourne le nombre total de résultat.
     */
    public function countItems(): int;
}
