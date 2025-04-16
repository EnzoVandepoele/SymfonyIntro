<?php

namespace App\Repository;

use App\Model\Starship;
use Psr\Log\LoggerInterface;

class StarshipRepository
{
    public function __construct(private LoggerInterface $logger)
    {
        
    }

    public function findAll(): array
    {
        $this->logger->info('collection de vaisseaux spatiaux récupérée');

        return [
            new Starship(
                id: 1,
                name: 'USS LeafyCruiser (NCC-0001)',
                class: 'Garden',
                captain: 'Jean-Luc Picles',
                status: 'taken over by Q',
            ),
            new Starship(
                id: 1,
                name: 'USS Espresso (NCC-1234-C)',
                class: 'Latte',
                captain: 'James T. Quick!',
                status: "repaired",
            ),
            new Starship(
                id: 1,
                name: 'USS Wanderlust (NCC-2024-W)',
                class: 'Delta Tourist',
                captain: 'Kathryn Journeyway',
                status: 'under construction',
            ),
        ];
    }
}