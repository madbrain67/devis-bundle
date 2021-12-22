<?php

declare(strict_types=1);

/**
 * This file is part of the Madbrain67 DevisBunble package.
 * (c) Madbrain67.
 * PHP version 7.
 *
 * @category Madbrain67\DevisBundle\Service
 *
 * @author   FERRERO Franck <ferrerofranck@plateformweb.com>
 * @license  http://opensource.org/licenses/gpl-license.php MIT License
 *
 * @see     https://github.com/madbrain67/devis-bundle
 */

namespace Madbrain67\DevisBundle\Service;

/*
 * This file is part of the Madbrain67 DevisBunble package.
 * (c) Madbrain67.
 * PHP version 7.
 *
 * @category Madbrain67\DevisBundle\Service
 *
 * @author   FERRERO Franck <ferrerofranck@plateformweb.com>
 * @license  http://opensource.org/licenses/gpl-license.php MIT License
 *
 * @see     https://github.com/madbrain67/devis-bundle
 */

use Symfony\Component\Yaml\Yaml;

/**
 * This file is part of the Madbrain67 DevisBunble package.
 * (c) Madbrain67.
 * PHP version 7.
 *
 * @category Madbrain67\DevisBundle\Service
 *
 * @author   FERRERO Franck <ferrerofranck@plateformweb.com>
 * @license  http://opensource.org/licenses/gpl-license.php MIT License
 *
 * @see     https://github.com/madbrain67/devis-bundle
 */
class DevisService
{
    /**
     * @var array
     */
    private $params;

    /**
     * @var string
     */
    private $file;

    /**
     * @var array
     */
    private $devis = [];

    public function __construct(array $params)
    {
        $this->params = $params;
    }

    private function getParameters()
    {
        return $this->params;
    }

    private function getParameter(string $param)
    {
        return $this->params[$param];
    }

    public function setDevis(string $devis): self
    {
        $output_path = $this->getParameter('output_path');
        if (!\is_dir($output_path)) {
            \mkdir($output_path);
        }

        $this->file = $output_path.'/'.$devis.'.yaml';
        $this->devis = \file_exists($this->file) ? Yaml::parseFile($this->file) : [];

        return $this;
    }

    public function getDevis(): array
    {
        return $this->devis;
    }

    public function controllerName(): string
    {
        return 'Devis Controller';
    }
}
