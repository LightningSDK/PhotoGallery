<?php

namespace Overridable\Modules\PhotoGallery\Model;

use Lightning\Model\Object;
use Lightning\Tools\Database;

class Gallery extends Object {

    const TABLE = 'photo_gallery';
    const PRIMARY_KEY = 'gallery_id';

    public function getImages() {
        static $images = null;
        if ($images === null) {
            $images = Database::getInstance()->selectAll('photo_gallery_image', ['gallery_id' => $this->id]);
        }
        return $images;
    }
}
