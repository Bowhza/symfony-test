<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ISSAPIController extends AbstractController
{
    #[Route('api/iss')]
    public function getLocation(LoggerInterface $logger) : Response
    {
        $logger->info('Logging Info');
        $test = ['test' => 'value'];
        return $this->json($test);
    }

    #[Route('api/iss/{id<\d+>}')]
    public function get(int $id) : Response
    {
        dd($id);
    }
}