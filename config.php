<?php

return [
    'package' => [
        'module' => 'Photo Gallery',
        'version' => '1.0',
    ],
    'imageBrowser' => [
        'containers' => [
            'galleries' => [
                'storage' => 'images/gallery',
                'url' => '/images/gallery/',
            ],
        ],
    ],
    'compiler' => [
        'js' => [
            'lightningsdk/photogallery' => [
                'js/photogallery.js' => 'photogallery.js',
                'node_modules/photoswipe/dist/photoswipe.min.js' => 'photogallery.js',
                'node_modules/photoswipe/dist/photoswipe-ui-default.min.js' => 'photogallery.js',
            ],
        ],
        'css' => [
            'lightningsdk/photogallery' => [
                'node_modules/photoswipe/dist/photoswipe.css' => 'photogallery/pg.css',
                'node_modules/photoswipe/dist/default-skin/default-skin.css' => 'photogallery/pg.css',
            ],
        ],
        'copy' => [
            'lightningsdk/photogallery' => [
                'node_modules/photoswipe/dist/default-skin/default-skin.png' => 'css/photogallery',
                'node_modules/photoswipe/dist/default-skin/default-skin.svg' => 'css/photogallery',
            ],
        ],
        'npm' => [
            'photoswipe',
        ],
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
