<?php
use \lightningsdk\imagemanager\Model\Image;
?>

<section class="headroom">
    <div class="row photogallery">
        <?php $imgdir = '/images/' . \Source\Model\Site::getInstance()->imagedir . '/gallery/'; ?>
        <?php $index = 0; ?>
            <ul class="small-block-grid-2 medium-block-grid-4 large-block-grid-5">
                <?php foreach ($gallery->getImages() as $image): ?>
                <li class="gallery-item">
                    <figure class="gallery-image" style="margin:0;padding-top:10px;" alt="<?=$image['description'];?>)">
                        <div data-href="<?=Image::getImage($image['image'], 1000, \Lightning\Tools\Image::FORMAT_JPG);?>" itemprop="contentUrl" class="show-link cover" data-index="<?=$index++;?>" style="background-image:url(<?=Image::getImage($image['image'], 250, \Lightning\Tools\Image::FORMAT_JPG);?>);min-height:200px;">
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
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
<?= $this->build('photoswipe'); ?>
