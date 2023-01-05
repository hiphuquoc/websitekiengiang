<?php
return [
    'left-menu-admin'   => [
        [
            'name'      => 'Tour du lịch',
            'route'     => '',
            'icon'      => '<i class="fa-solid fa-suitcase-rolling"></i>',
            'child'     => [
                [
                    'name'  => '1. Trong nước',
                    'route' => '',
                    'icon'  => '<i data-feather=\'circle\'></i>',
                    'child' => [
                        [
                            'name'  => '1.1. Điểm đến',
                            'route' => '',
                            'icon'  => '<i data-feather=\'circle\'></i>'
                        ]
                    ]
                ]
            ]
        ]
    ]
];