<?php

declare(strict_types=1);

namespace Madbrain67\DevisBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class FooController
{
    public function index(): JsonResponse
    {
        return new JsonResponse(['test' => 'fr']);
    }
}
