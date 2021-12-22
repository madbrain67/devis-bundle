<?php

declare(strict_types=1);

/**
 * This file is part of the Madbrain67 DevisBunble package.
 * (c) Madbrain67.
 * PHP version 7.
 *
 * @category Madbrain67\DevisBundle\Controller
 *
 * @author   FERRERO Franck <ferrerofranck@plateformweb.com>
 * @license  http://opensource.org/licenses/gpl-license.php MIT License
 *
 * @see     https://github.com/madbrain67/devis-bundle
 */

namespace Madbrain67\DevisBundle\Controller;

/*
 * This file is part of the Madbrain67 DevisBunble package.
 * (c) Madbrain67.
 * PHP version 7.
 *
 * @category Madbrain67\DevisBundle\Controller
 *
 * @author   FERRERO Franck <ferrerofranck@plateformweb.com>
 * @license  http://opensource.org/licenses/gpl-license.php MIT License
 *
 * @see     https://github.com/madbrain67/devis-bundle
 */

use Madbrain67\DevisBundle\Service\DevisService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\Translation\TranslatorInterface;
use Twig\Environment;

/**
 * This file is part of the Madbrain67 DevisBunble package.
 * (c) Madbrain67.
 * PHP version 7.
 *
 * @category Madbrain67\DevisBundle\Controller
 *
 * @author   FERRERO Franck <ferrerofranck@plateformweb.com>
 * @license  http://opensource.org/licenses/gpl-license.php MIT License
 *
 * @see     https://github.com/madbrain67/devis-bundle
 */
class DevisController
{
    /**
     * @var Environment
     */
    private $twigEnvironment;

    /**
     * @var TranslatorInterface
     */
    private $translator;

    /**
     * @var DevisService
     */
    private $devisService;

    /**
     * Void __construct.
     */
    public function __construct(Environment $twigEnvironment, TranslatorInterface $translator, DevisService $devisService)
    {
        $this->twigEnvironment = $twigEnvironment;
        $this->translator = $translator;
        $this->devisService = $devisService;
    }

    public function index(): Response
    {
        $this->devisService->setDevis('devis.form');

        $response = new Response(
            $this->twigEnvironment->render('@MB67DevisBundle/devis_bundle.html.twig', [
                'controller_name' => $this->devisService->controllerName(),
                'devis' => $this->devisService->getDevis(),
            ])
        );

        return $response;
    }
}
