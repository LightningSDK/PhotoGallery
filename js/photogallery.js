function initPhotoGallery() {
    var items = [];
    $(".gallery-item").each(function(){
        var img = $(this).find('img');
        if (img.length > 0) {
            items.push({
                src: img.attr('src').replace('-s.jpg', '-l.jpg'),
                w: 1200,
                h: 800
            });
        }
    });

    pswp = {
        element: document.querySelectorAll('.pswp')[0],
        ui: PhotoSwipeUI_Default,
        items: items,
        options: {
            shareButtons: [
                {id:"facebook",label:"Share on Facebook",url:"https://www.facebook.com/sharer/sharer.php?u={{url}}"},
                {id:"twitter",label:"Tweet",url:"https://twitter.com/intent/tweet?text={{text}}&url={{url}}"},
                {id:"pinterest",label:"Pin it",url:"http://www.pinterest.com/pin/create/button/?url={{url}}&media={{image_url}}&description={{text}}"},
            ]
        },
    };

    var pid = lightning.hash("pid");
    if (pid) {
        pswp.options.index = parseInt(pid) - 1;
        var gallery = new PhotoSwipe(pswp.element, pswp.ui, pswp.items, pswp.options);
        gallery.init();
    }

    $('.gallery-image').on('click', 'img', function(){
        pswp.options.index = $(this).data('index');
        var gallery = new PhotoSwipe(pswp.element, pswp.ui, pswp.items, pswp.options);
        gallery.init();
    });
}
