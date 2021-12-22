<?php

declare(strict_types=1);

/**
 * This file is part of the Madbrain67 DevisBunble package.
 * (c) Madbrain67.
 * PHP version 7.
 *
 * @category Madbrain67\DevisBundle
 *
 * @author   FERRERO Franck <ferrerofranck@plateformweb.com>
 * @license  http://opensource.org/licenses/gpl-license.php MIT License
 *
 * @see     https://github.com/madbrain67/devis-bundle
 */

namespace Madbrain67\DevisBundle;

/*
 * This file is part of the Madbrain67 DevisBunble package.
 * (c) Madbrain67.
 * PHP version 7.
 *
 * @category Madbrain67\DevisBundle
 *
 * @author   FERRERO Franck <ferrerofranck@plateformweb.com>
 * @license  http://opensource.org/licenses/gpl-license.php MIT License
 *
 * @see     https://github.com/madbrain67/devis-bundle
 */

use Madbrain67\DevisBundle\DependencyInjection\DevisToolsExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * This file is part of the Madbrain67 DevisBunble package.
 * (c) Madbrain67.
 * PHP version 7.
 *
 * @category Madbrain67\DevisBundle
 *
 * @author   FERRERO Franck <ferrerofranck@plateformweb.com>
 * @license  http://opensource.org/licenses/gpl-license.php MIT License
 *
 * @see     https://github.com/madbrain67/devis-bundle
 */
class MB67DevisBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new DevisToolsExtension();
    }
}
