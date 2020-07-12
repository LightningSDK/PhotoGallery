(function() {
    var self = {

        pswp: null,
        gallery: null,

        defaultWidth: 0,
        defaultHeight: 0,

        init: function () {
            var items = [];
            $('.gallery-item').each(function(){
                var img = $(this).find('figure');
                if (img.length > 0) {
                    var link = img.find('.show-link').first();
                    var id = link.data('index');
                    items.push({
                        src: link.data('href'),
                        w: self.defaultWidth,
                        h: self.defaultHeight
                    });
                }
            });

            self.pswp = {
                element: document.querySelectorAll('.pswp')[0],
                ui: PhotoSwipeUI_Default,
                items: items,
                options: {
                    shareButtons: [
                        {id:"facebook",label:"Share on Facebook",url:"https://www.facebook.com/sharer/sharer.php?u={{url}}"},
                        {id:"twitter",label:"Tweet",url:"https://twitter.com/intent/tweet?text={{text}}&url={{url}}"},
                        {id:"pinterest",label:"Pin it",url:"http://www.pinterest.com/pin/create/button/?url={{url}}&media={{image_url}}&description={{text}}"},
                    ]
                }
            };

            var pid = lightning.hash('pid');
            if (pid && items.length >= parseInt(pid)) {
                self.pswp.options.index = parseInt(pid) - 1;
                self.show();
            }

            $('.photogallery').on('click', '.show-link', function(){
                self.pswp.options.index = $(this).data('index');
                self.show();
            });
        },

        show: function() {
            self.gallery = new PhotoSwipe(self.pswp.element, self.pswp.ui, self.pswp.items, self.pswp.options);
            self.gallery.listen('gettingData', function (index, item) {
                if (item.w < 1 || item.h < 1) {
                    var img = new Image();
                    img.onload = function () {
                        item.w = this.width;
                        item.h = this.height;
                        self.gallery.updateSize(true);
                    };
                    img.src = item.src;
                }
            });
            self.gallery.init();
        },

        hide: function() {
            self.gallery.close();
        },

        addImage: function(image) {
            if (typeof image === 'object') {
                self.pswp.items.push(image);
            } else {
                self.pswp.items.push({
                    src: image,
                    w: self.defaultWidth,
                    h: self.defaultHeight,
                });
            }
        },

        setImages: function(images) {
            var newImages = [];

            for (var i in images) {
                if (typeof images[i] === 'object') {
                    newImages.push(images[i]);
                } else {
                    newImages.push({
                        src: images[i],
                        w: self.defaultWidth,
                        h: self.defaultHeight,
                    });
                }
            }

            self.pswp.items = newImages;
        }
    };
    lightning.js.addModule("photogallery", self)
})();
