<?php

namespace Modules\PhotoGallery\Pages;

use Lightning\Pages\Table;
use Lightning\Tools\ClientUser;

class AdminGalleries extends Table {
    const TABLE = 'photo_gallery';
    const PRIMARY_KEY = 'gallery_id';

    public function hasAccess() {
        return ClientUser::requireAdmin();
    }
}
