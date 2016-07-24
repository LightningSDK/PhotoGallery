<?php

namespace Modules\PhotoGallery\Pages;

use Exception;
use Lightning\Tools\Request;
use Lightning\Tools\Template;
use Lightning\View\CSS;
use Lightning\View\JS;
use Lightning\View\Page;
use Modules\PhotoGallery\Model\Gallery;

class GalleryView extends Page {

    protected $page = ['gallery', 'PhotoGallery'];

    public function hasAccess() {
        return true;
    }

    public function get() {
        if ($id = Request::get('id', Request::TYPE_INT)) {
            $gallery = Gallery::loadById($id);
        }

        if (empty($gallery)) {
            throw new Exception('Gallery not found.');
        }

        Template::getInstance()->set('gallery', $gallery);

        CSS::add('/css/photoswipe/default-skin.css');
        CSS::add('/css/photoswipe.css');
        JS::startup('initPhotoGallery()', [
            '/js/photoswipe.min.js',
            '/js/photoswipe-ui-default.min.js',
            '/js/photogallery.min.js',
        ]);
    }
}
