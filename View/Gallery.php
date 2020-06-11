<?php

namespace lightningsdk\photogallery\View;

use lightningsdk\core\View\CSS;
use lightningsdk\core\View\JS;

class Gallery {
    public static function init() {
        CSS::add('/css/photoswipe/default-skin.css');
        CSS::add('/css/photoswipe.css');
        JS::startup('lightning.modules.photogallery.init()', [
            '/js/photoswipe.min.js',
            '/js/photoswipe-ui-default.min.js',
            '/js/photogallery.min.js',
        ]);
    }
}
