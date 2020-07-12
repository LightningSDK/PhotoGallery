<?php

namespace lightningsdk\photogallery\View;

use lightningsdk\core\View\CSS;
use lightningsdk\core\View\JS;

class Gallery {
    public static function init() {
        CSS::add('/css/photogallery/pg.css');
        JS::startup('lightning.modules.photogallery.init()', ['/js/photogallery.js']);
    }
}
