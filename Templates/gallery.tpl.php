<?php
use \Modules\ImageManager\Model\Image;
?>

<section class="headroom">
    <div class="row" data-equalizer>
        <?php $imgdir = '/images/' . \Source\Model\Site::getInstance()->imagedir . '/gallery/'; ?>
        <?php $index = 0; ?>
        <?php foreach ($gallery->getImages() as $image): ?>
            <div class="small-6 medium-3 column left">
                <div class="gallery-item" data-equalizer-watch>
                    <figure class="gallery-image">
                        <span data-href="<?=Image::getImage($image['image'], 1000, \Lightning\Tools\Image::FORMAT_JPG);?>" itemprop="contentUrl" class="show-link">
                            <img src="<?=Image::getImage($image['image'], 250, \Lightning\Tools\Image::FORMAT_JPG);?>" data-index="<?=$index++;?>" style="padding-top:10px;" alt="<?=$image['description'];?>" />
                        </span>
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
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?= $this->build('photoswipe'); ?>
