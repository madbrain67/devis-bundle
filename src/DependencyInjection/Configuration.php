<?php

declare(strict_types=1);

/**
 * This file is part of the Madbrain67 DevisBunble package.
 * (c) Madbrain67.
 * PHP version 7.
 *
 * @category Madbrain67\DevisBundle\DependencyInjection
 *
 * @author   FERRERO Franck <ferrerofranck@plateformweb.com>
 * @license  http://opensource.org/licenses/gpl-license.php MIT License
 *
 * @see     https://github.com/madbrain67/devis-bundle
 */

namespace Madbrain67\DevisBundle\DependencyInjection;

/*
 * This file is part of the Madbrain67 DevisBunble package.
 * (c) Madbrain67.
 * PHP version 7.
 *
 * @category Madbrain67\DevisBundle\DependencyInjection
 *
 * @author   FERRERO Franck <ferrerofranck@plateformweb.com>
 * @license  http://opensource.org/licenses/gpl-license.php MIT License
 *
 * @see     https://github.com/madbrain67/devis-bundle
 */

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This file is part of the Madbrain67 DevisBunble package.
 * (c) Madbrain67.
 * PHP version 7.
 *
 * @category Madbrain67\DevisBundle\DependencyInjection
 *
 * @author   FERRERO Franck <ferrerofranck@plateformweb.com>
 * @license  http://opensource.org/licenses/gpl-license.php MIT License
 *
 * @see     https://github.com/madbrain67/devis-bundle
 */
class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder('devis_tools');

        $rootNode = $builder->getRootNode();

        //dump($rootNode);

        $rootNode
            ->children()
                ->scalarNode('output_path')
                ->isRequired()
            ->end()
        ->end();

        return $builder;
    }
}
