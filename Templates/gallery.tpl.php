<section class="headroom">
    <div class="row" data-equalizer>
        <?php $imgdir = '/images/' . \Source\Model\Site::getInstance()->imagedir . '/gallery/'; ?>
        <?php $index = 0; ?>
        <?php foreach ($gallery->getImages() as $image): ?>
            <div class="small-6 medium-3 column left">
                <div class="gallery-item" data-equalizer-watch>
                    <div class="gallery-image">
                        <img src="<?=$imgdir . $image['image'];?>-s.jpg" data-index="<?=$index++;?>" style="padding-top:10px;" />
                    </div>
                    <?php if (!empty($image['title'])): ?>
                        <h3><?=$image['title'];?></h3>
                    <?php endif; ?>
                    <?php if (!empty($image['title']) && !empty($image['description'])): ?>
                        <br>
                    <?php endif; ?>
                    <?php if (!empty($image['description'])): ?>
                        <?=$image['description'];?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?= $this->build('photoswipe'); ?>
