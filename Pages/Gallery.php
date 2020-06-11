<?php

namespace lightningsdk\photogallery\Pages;

use Exception;
use Lightning\Tools\Request;
use Lightning\Tools\Template;
use Lightning\View\Page;
use lightningsdk\photogallery\Model\Gallery as GalleryModel;
use lightningsdk\photogallery\View\Gallery as GalleryView;

class Gallery extends Page {

    protected $page = ['gallery', 'PhotoGallery'];

    protected $rightColumn = false;

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
        elseif ($slug = Request::getFromURL('/gallery\/(.*)/')) {
            $gallery = GalleryModel::loadBySlug($slug);
        }

        if (empty($gallery)) {
            throw new Exception('Gallery not found.');
        }

        Template::getInstance()->set('gallery', $gallery);

        GalleryView::init();
    }
}
