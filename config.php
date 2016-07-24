<?php

return [
    'package' => [
        'module' => 'SocialQuiz',
        'version' => '1.0',
    ],
    'routes' => [
        'static' => [
            'gallery' => 'Modules\\PhotoGallery\\Pages\\GalleryView',
            'admin/galleries' => 'Modules\\PhotoGallery\\Pages\\AdminGalleries',
            'admin/images' => 'Modules\\PhotoGallery\\Pages\\AdminImages',
        ]
    ],
    'overridable' => [
        'Modules\\PhotoGallery\\Model\\Gallery' => 'Overridable\\Modules\\PhotoGallery\\Model\\Gallery',
    ]
];
