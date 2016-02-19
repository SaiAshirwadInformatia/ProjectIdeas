<?php

return [
    'level1' => [
        'label' => 'Level 1',
        'icon'  => 'fa-dashboard',
        'url'   => 'http://localhost/AppMenuBuilder/level1',
    ],
    'level2' => [
        'label'    => 'Level 2',
        'icon'     => 'fa-adjust',
        'url'      => 'http://localhost/AppMenuBuilder/level2',
        'children' => [
            'level2.1' => [
                'label' => 'Level 2.1',
                'icon'  => 'fa-circle-o',
                'url'   => '#baseurl#level2.1',
            ],
            'level2.2' => [
                'label' => 'Level 2.2',
                'icon'  => 'fa-circle-o',
                'url'   => '#baseurl#level2.2',
            ],
            'level2.3' => [
                'label' => 'Level 2.3',
                'icon'  => 'fa-circle-o',
                'url'   => '#baseurl#level2.3',
            ],
        ],
    ],
    'level3' => [
        'label'    => 'Level 2',
        'icon'     => 'fa-adjust',
        'url'      => 'http://localhost/AppMenuBuilder/level2',
        'children' => [
            'level31' => [
                'label'    => 'Level 3.1',
                'icon'     => 'fa-circle-o',
                'url'      => '#baseurl#level3.1',
                'children' => [
                    'level311' => [
                        'label' => 'Level 3.1.1',
                        'icon'  => 'fa-circle-o',
                        'url'   => '#baseurl#level3.1.1',
                    ],
                    'level312' => [
                        'label' => 'Level 3.1.2',
                        'icon'  => 'fa-circle-o',
                        'url'   => '#baseurl#level3.1.2',
                    ],
                ],
            ],
        ],
    ],
];
