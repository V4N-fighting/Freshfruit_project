document.addEventListener('DOMContentLoaded', function () {
    var mainSlideElement = document.getElementById('contain-slide');
    var thumbnailSlideElement = document.getElementById('contain-thumbnail');

    if (mainSlideElement && thumbnailSlideElement) {
        // Khởi tạo slide chính
        var mainSplide = new Splide('#contain-slide', {
            type: 'loop',
            perPage: 1,
            arrows: false,
            pagination: false,
        });
        mainSplide.mount();

        // Khởi tạo thumbnail slide
        var thumbnailSplide = new Splide('#contain-thumbnail', {
            perPage: 3,
            gap: 40,
            omitEnd: true,
            fixedWidth: 78,
            fixedHeight: 78,
            arrows: true,
            focus: 'center',
        });
        thumbnailSplide.mount();

        var splide = new Splide( '#products-content', {
            perPage: 4,
            gap: 30,
            rewind : true,
            pagination: false
          } );
          
        splide.mount();        

        // Thêm sự kiện `click` cho từng phần tử thumbnail
        var thumbnails = thumbnailSplide.Components.Elements.list.children;
        for (var i = 0; i < thumbnails.length; i++) {
            (function(index) {
                thumbnails[index].addEventListener('click', function() {
                    mainSplide.go(index);  // Chuyển đến slide chính tại vị trí được ấn
                });
            })(i);
        }

        // Đồng bộ thumbnail khi thumbnailSplide được điều hướng bằng arrow
        thumbnailSplide.on('move', function (newIndex) {
            mainSplide.go(newIndex); // Chuyển slide chính đến slide hiện tại của thumbnail
        });

        mainSplide.on('move', function(newIndex) {
            // Loại bỏ lớp "is-active" khỏi tất cả các thẻ <img> trong thumbnail
            for (var i = 0; i < thumbnails.length; i++) {
                var imgElement = thumbnails[i].querySelector('img');
                if (imgElement) {
                    imgElement.classList.remove('is-active-img');
                }
            }

            // Thêm lớp "is-active" cho thẻ <img> trong thumbnail tại vị trí hiện tại
            var activeImgElement = thumbnails[newIndex].querySelector('img');
            if (activeImgElement) {
                activeImgElement.classList.add('is-active-img');
            }

            // Đồng bộ thumbnailSplide để hiển thị đúng vị trí
            thumbnailSplide.go(newIndex);
        });
    }
});




