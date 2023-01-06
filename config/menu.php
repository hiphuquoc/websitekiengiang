<?php
return [
    'left-menu-admin'   => [
        [
            'name'      => 'Yều cầu dịch vụ',
            'route'     => '',
            'icon'      => '<i class="fa-regular fa-handshake"></i>',
            'child'     => [
                [
                    'name'  => '1. Danh sách',
                    'route' => 'admin.request.list',
                    'icon'  => '<i data-feather=\'circle\'></i>',
                    // 'child' => [
                    //     [
                    //         'name'  => '1.1. Điểm đến',
                    //         'route' => '',
                    //         'icon'  => '<i data-feather=\'circle\'></i>'
                    //     ]
                    // ]
                ]
            ]
        ],
        [
            'name'      => 'Quản lí CTV',
            'route'     => '',
            'icon'      => '<i class="fa-solid fa-users"></i>',
            'child'     => [
                [
                    'name'  => '1. Danh sách',
                    'route' => 'admin.congTacVien.list',
                    'icon'  => '<i data-feather=\'circle\'></i>',
                    // 'child' => [
                    //     [
                    //         'name'  => '1.1. Điểm đến',
                    //         'route' => '',
                    //         'icon'  => '<i data-feather=\'circle\'></i>'
                    //     ]
                    // ]
                ]
            ]
        ]
    ]
];