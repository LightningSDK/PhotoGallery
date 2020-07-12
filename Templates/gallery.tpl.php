<?php

use lightningsdk\core\Tools\Configuration;
use \lightningsdk\imagemanager\Model\Image;
?>

<div class="padded">
    <div class="row photogallery">
        <?php $imgdir = Configuration::get('imageBrowser.containers.galleries.storage.url'); ?>
        <?php $index = 0; ?>
            <div class="grid-x grid-padding-x grid-padding-y small-up-2 medium-up-3 large-up-4 category-products text-center">
                <?php foreach ($gallery->getImages() as $image): ?>
                <div class="cell gallery-item">
                    <figure class="gallery-image" style="margin:0;padding-top:10px;" alt="<?=$image['description'];?>)">
                        <div data-href="<?=Image::getImage($image['image'], 1000, \lightningsdk\core\Tools\Image::FORMAT_JPG);?>" itemprop="contentUrl" class="show-link cover" data-index="<?=$index++;?>" style="background-image:url(<?=Image::getImage($image['image'], 250, \lightningsdk\core\Tools\Image::FORMAT_JPG);?>);min-height:200px;">
                        </div>
                        <figcaption>
                            <?php if (!empty($image['title'])): ?>
                                <h3><?=$image['title'];?></h3>
                            <?php endif; ?>
                            <?php if (!empty($image['title']) && !empty($image['description'])): ?>
                                <br>
                            <?php endif; ?>
                            <?php if (!empty($image['description'])): ?>
                                <?=$image['description'];?>
                            <?php endif; ?>
                        </figcaption>
                    </figure>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->build(['photoswipe', 'lightningsdk/photogallery']); ?>
