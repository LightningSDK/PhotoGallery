<?php

return [
    'package' => [
        'module' => 'SocialQuiz',
        'version' => '1.0',
    ],
    'routes' => [
        'static' => [
            'admin/galleries' => \lightningsdk\photogallery\Pages\AdminGalleries::class,
            'admin/galleries/images' => \lightningsdk\photogallery\Pages\AdminImages::class,
        ],
        'dynamic' => [
            '^gallery(/.*)?$' => \lightningsdk\photogallery\Pages\Gallery::class,
        ],
    ],
];
