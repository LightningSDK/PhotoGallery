<?php

namespace Modules\PhotoGallery\Pages;

use Lightning\Pages\Table;
use Lightning\Tools\ClientUser;

class AdminImages extends Table {
    const TABLE = 'photo_gallery_image';
    const PRIMARY_KEY = 'image_id';

    public function hasAccess() {
        return ClientUser::requireAdmin();
    }
}
