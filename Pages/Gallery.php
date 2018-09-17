<?php

namespace Modules\PhotoGallery\Pages;

use Exception;
use Lightning\Tools\Request;
use Lightning\Tools\Template;
use Lightning\View\Page;
use Modules\PhotoGallery\Model\Gallery as GalleryModel;
use Modules\PhotoGallery\View\Gallery as GalleryView;

class Gallery extends Page {

    protected $page = ['gallery', 'PhotoGallery'];

    public function hasAccess() {
        return true;
    }

    /**
     * @throws Exception
     */
    public function get() {
        if ($id = Request::get('id', Request::TYPE_INT)) {
            $gallery = GalleryModel::loadById($id);
        }

        if (empty($gallery)) {
            throw new Exception('Gallery not found.');
        }

        Template::getInstance()->set('gallery', $gallery);

        GalleryView::init();
    }
}
