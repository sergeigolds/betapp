<?php

class Data
{

    public function getData()
    {
        $bettingData = [
            [
                'match_id' => 'ade8fd01-6829-322b-a7cb-7e9dae4b5e9e',
                'favorite' => [
                    'name' => 'Arsenal',
                    'icon' => 'arsenal.png',
                ],
                'underdog' => [
                    'name' => 'Chelsea',
                    'icon' => 'chelsea.png',
                ],
                'odds' => [
                    'win' => 5.37,
                    'draft' => 1.12,
                    'lost' => 1.86,
                ],
            ],
            [
                'match_id' => '39178a02-2ca2-378e-b79a-062e478df57e',
                'favorite' => [
                    'name' => 'Everton',
                    'icon' => 'everton.png',
                ],
                'underdog' => [
                    'name' => 'Liverpool',
                    'icon' => 'liverpool.png',
                ],
                'odds' => [
                    'win' => 1.48,
                    'draft' => 2.84,
                    'lost' => 1.73,
                ],
            ],
        ];

        return $bettingData;
    }
}
