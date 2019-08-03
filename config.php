<?php

return [
    'package' => [
        'module' => 'SocialQuiz',
        'version' => '1.0',
    ],
    'routes' => [
        'static' => [
            'admin/galleries' => \Modules\PhotoGallery\Pages\AdminGalleries::class,
            'admin/galleries/images' => \Modules\PhotoGallery\Pages\AdminImages::class,
        ],
        'dynamic' => [
            '^gallery(/.*)?$' => \Modules\PhotoGallery\Pages\Gallery::class,
        ],
    ],
];
