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
];
