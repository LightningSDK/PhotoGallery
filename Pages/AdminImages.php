<?php

namespace lightningsdk\photogallery\Pages;

use lightningsdk\core\Pages\Table;
use lightningsdk\core\Tools\ClientUser;
use lightningsdk\core\Tools\Request;

class AdminImages extends Table {
    const TABLE = 'photo_gallery_image';
    const PRIMARY_KEY = 'image_id';

    protected $parentLink = 'gallery_id';

    protected $preset = [
        'image' => [
            'type' => 'image',
            'browser' => true,
            'container' => 'images',
            'format' => 'jpg',
        ],
    ];

    public function hasAccess() {
        $this->parentId = Request::get('gallery_id', Request::TYPE_INT);
        return ClientUser::requireAdmin();
    }
}
