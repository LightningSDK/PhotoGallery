<?php

return [
    'package' => [
        'module' => 'SocialQuiz',
        'version' => '1.0',
    ],
    'routes' => [
        'static' => [
            'gallery' => \Modules\PhotoGallery\Pages\GalleryView::class,
            'admin/galleries' => \Modules\PhotoGallery\Pages\AdminGalleries::class,
            'admin/images' => \Modules\PhotoGallery\Pages\AdminImages::class,
        ]
    ],
];
